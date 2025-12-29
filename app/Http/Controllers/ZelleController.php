<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PagoZelle;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ZelleController extends Controller
{
    public function receive(Request $request)
    {
        $body = $request->input('body');

        // 1. Extraer Referencia: Ahora ignora asteriscos (*) y otros símbolos
        // Buscamos "Confirmation:" seguido de cualquier cosa hasta encontrar el código alfanumérico
        preg_match('/Confirmation:\s*\*?([a-zA-Z0-9]+)\*?/i', $body, $refMatch);
        
        // 2. Extraer Monto: Buscamos el número tras el $ (ignorando posibles asteriscos)
        preg_match('/\$([0-9,.]+)/', $body, $montoMatch);
        
        // 3. Extraer Remitente: Todo antes de "sent you"
        preg_match('/^(.*?)\s+sent\s+you/mi', $body, $nameMatch);
        
        // 4. Extraer Fecha: Buscamos la fecha ignorando asteriscos
        preg_match('/Date:\s*\*?([\d\/]+)\*?/i', $body, $dateMatch);

        $referencia = $refMatch[1] ?? null;

        if (!$referencia) {
            // Log de depuración por si acaso
            Log::warning("Zelle: No se halló referencia. Revisar formato: " . substr($body, 0, 150));
            return response()->json(['status' => 'error', 'message' => 'Datos incompletos'], 400);
        }

        $monto = isset($montoMatch[1]) ? (float) str_replace(',', '', $montoMatch[1]) : 0;
        $remitente = trim(str_replace('*', '', $nameMatch[1] ?? 'Desconocido')); // Limpiamos asteriscos del nombre
        $fechaRaw = isset($dateMatch[1]) ? $dateMatch[1] : now();

        try {
            $fecha = \Carbon\Carbon::parse($fechaRaw);
        } catch (\Exception $e) {
            $fecha = now();
        }

        $pago = \App\Models\PagoZelle::updateOrCreate(
            ['referencia' => $referencia],
            [
                'remitente' => $remitente,
                'monto' => $monto,
                'estado' => 'Completada',
                'fecha_pago' => $fecha,
                'nota_memorandum' => 'Procesado automáticamente',
            ]
        );

        return response()->json(['status' => 'success', 'ref' => $referencia], 200);
    }

    public function receive1(Request $request)
    {
        $body = $request->input('body'); // El texto que manda Google Apps Script
        
        // 1. Extraer Remitente: Todo lo que está antes de "sent you"
        preg_match('/^(.*?)\s+sent you/m', $body, $nameMatch);
        
        // 2. Extraer Monto: El número después del signo $
        preg_match('/\$([0-9,.]+)/', $body, $montoMatch);
        
        // 3. Extraer Fecha: El formato MM/DD/YYYY
        preg_match('/Date:\s*([\d\/]+)/', $body, $dateMatch);
        
        // 4. Extraer Confirmación: El código alfanumérico
        preg_match('/Confirmation:\s*(\w+)/', $body, $refMatch);
        
        // 5. Extraer Memo: Lo que esté en la línea de Memo
        preg_match('/Memo:\s*(.*)/', $body, $memoMatch);

        // Limpieza de datos
        $referencia = $refMatch[1] ?? null;
        $monto = isset($montoMatch[1]) ? (float) str_replace(',', '', $montoMatch[1]) : 0;
        $remitente = trim($nameMatch[1] ?? 'Desconocido');
        $memo = trim($memoMatch[1] ?? '');
        
        // Convertir fecha al formato de BD (YYYY-MM-DD)
        try {
            $fecha = isset($dateMatch[1]) ? Carbon::parse($dateMatch[1]) : Carbon::now();
        } catch (\Exception $e) {
            $fecha = Carbon::now();
        }

        if ($referencia) {
            $pago = PagoZelle::updateOrCreate(
                ['referencia' => $referencia],
                [
                    'remitente' => $remitente,
                    'monto' => $monto,
                    'estado' => 'Completada',
                    'fecha_pago' => $fecha,
                    'nota_memorandum' => $memo,
                    'alias_identificador' => 'Wells Fargo Zelle',
                ]
            );

            Log::info("Pago Zelle Procesado: " . $referencia);
            return response()->json(['status' => 'success', 'referencia' => $referencia], 200);
        }

        Log::error("No se pudo procesar el correo Zelle: " . $body);
        return response()->json(['status' => 'error', 'message' => 'Datos incompletos'], 400);
    }
}