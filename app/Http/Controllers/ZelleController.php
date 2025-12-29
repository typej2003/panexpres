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

        // 1. Extraer Monto (Soporta formatos con y sin comas)
        preg_match('/\$([0-9,.]+)/', $body, $montoMatch);
        
        // 2. Extraer Confirmación (Buscamos "Confirmation", "Confirmación" o solo el código)
        preg_match('/(?:Confirmation|Confirmación|Confirmacion):\s*(\w+)/i', $body, $refMatch);
        
        // 3. Extraer Remitente (Mejorado para capturar nombres largos antes de "sent you")
        preg_match('/^(.*?)\s+sent\s+you/mi', $body, $nameMatch);

        // 4. Extraer Fecha
        preg_match('/Date:\s*([\d\/]+)/', $body, $dateMatch);

        $referencia = $refMatch[1] ?? null;

        if (!$referencia) {
            // ¡ESTO ES CLAVE! Si falla, revisa storage/logs/laravel.log
            Log::error("Fallo de extracción Zelle. Cuerpo recibido: " . $body);
            return response()->json([
                'status' => 'error', 
                'message' => 'Datos incompletos',
                'debug' => 'No se encontró la referencia'
            ], 400);
        }

        $monto = isset($montoMatch[1]) ? (float) str_replace(',', '', $montoMatch[1]) : 0;
        $remitente = trim($nameMatch[1] ?? 'Remitente no detectado');

        $pago = PagoZelle::updateOrCreate(
            ['referencia' => $referencia],
            [
                'remitente' => $remitente,
                'monto' => $monto,
                'estado' => 'Completada',
                'fecha_pago' => isset($dateMatch[1]) ? \Carbon\Carbon::parse($dateMatch[1]) : now(),
                'nota_memorandum' => 'Procesado vía API',
            ]
        );

        return response()->json(['status' => 'success'], 200);
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