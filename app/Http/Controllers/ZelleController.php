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

        // 1. FILTRO DE SEGURIDAD: Ignorar si es basura, links publicitarios o está vacío
        if (empty(trim($body)) || str_contains($body, 'portaloficial.blog') || !str_contains($body, 'Confirmation')) {
            return response()->json(['status' => 'ignored', 'message' => 'No es un correo de pago'], 200);
        }

        // 2. EXTRACCIÓN CON REGEX (Soporta asteriscos * del formato de Google)
        
        // Extraer Referencia: Captura el código entre asteriscos o tras "Confirmation:"
        preg_match('/Confirmation:\s*\*?([a-zA-Z0-9]+)\*?/i', $body, $refMatch);
        
        // Extraer Monto: Busca el número tras el signo $
        preg_match('/\$([0-9,.]+)/', $body, $montoMatch);
        
        // Extraer Remitente: Todo antes de "sent you"
        preg_match('/^(.*?)\s+sent\s+you/mi', $body, $nameMatch);
        
        // Extraer Fecha: Formato MM/DD/YYYY entre posibles asteriscos
        preg_match('/Date:\s*\*?([\d\/]+)\*?/i', $body, $dateMatch);
        
        // Extraer Memo: El texto después de "Memo:"
        preg_match('/Memo:\s*\*?(.*?)\*?\s*(?:\r?\n|$)/i', $body, $memoMatch);

        $referencia = $refMatch[1] ?? null;

        // 3. VALIDACIÓN DE DATOS
        if (!$referencia) {
            // Solo logueamos si realmente parece un correo de Zelle pero falló la regex
            if (str_contains($body, 'sent you')) {
                Log::warning("Zelle: Falló extracción en correo legítimo. Cuerpo: " . substr($body, 0, 150));
                return response()->json(['status' => 'error', 'message' => 'Referencia no hallada'], 400);
            }
            return response()->json(['status' => 'ignored'], 200);
        }

        // Limpieza final de variables
        $monto = isset($montoMatch[1]) ? (float) str_replace(',', '', $montoMatch[1]) : 0;
        $remitente = trim(str_replace('*', '', $nameMatch[1] ?? 'Desconocido'));
        $memo = trim(str_replace('*', '', $memoMatch[1] ?? ''));
        
        try {
            $fecha = isset($dateMatch[1]) ? Carbon::parse($dateMatch[1]) : now();
        } catch (\Exception $e) {
            $fecha = now();
        }

        // 4. GUARDADO EN BASE DE DATOS
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

        return response()->json([
            'status' => 'success', 
            'referencia' => $referencia,
            'monto' => $monto
        ], 200);
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