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
        
        // Limpieza inicial: eliminamos asteriscos y espacios dobles para facilitar la búsqueda
        $cleanBody = str_replace('*', '', $body);

        // 1. Extraer Referencia: Buscamos después de "Confirmation:"
        // Acepta códigos con letras y números
        preg_match('/Confirmation:\s*([a-zA-Z0-9]+)/i', $cleanBody, $refMatch);
        $referencia = isset($refMatch[1]) ? trim($refMatch[1]) : null;

        // 2. Extraer Monto
        preg_match('/\$([0-9,.]+)/', $cleanBody, $montoMatch);
        $monto = isset($montoMatch[1]) ? (float) str_replace(',', '', $montoMatch[1]) : 0;

        // 3. Extraer Remitente: Todo lo que esté antes de "sent you"
        preg_match('/^(.*?)\s+sent\s+you/mi', $cleanBody, $nameMatch);
        $remitente = isset($nameMatch[1]) ? trim($nameMatch[1]) : 'Desconocido';

        // 4. Extraer Fecha y Memo
        preg_match('/Date:\s*([\d\/]+)/i', $cleanBody, $dateMatch);
        preg_match('/Memo:\s*(.*)/i', $cleanBody, $memoMatch);

        // VALIDACIÓN CRÍTICA
        if (!$referencia) {
            Log::error("Zelle Error: No se detectó referencia. Cuerpo recibido: " . $body);
            return response()->json(['status' => 'error', 'message' => 'Referencia no hallada'], 400);
        }

        try {
            $fecha = isset($dateMatch[1]) ? \Carbon\Carbon::parse($dateMatch[1]) : now();
            
            $pago = \App\Models\PagoZelle::updateOrCreate(
                ['referencia' => $referencia], // Si la referencia ya existe, actualiza; si no, crea.
                [
                    'remitente' => $remitente,
                    'monto' => $monto,
                    'estado' => 'Completada',
                    'fecha_pago' => $fecha,
                    'nota_memorandum' => isset($memoMatch[1]) ? trim($memoMatch[1]) : '',
                    'alias_identificador' => 'Wells Fargo Zelle',
                ]
            );

            return response()->json([
                'status' => 'success', 
                'id_guardado' => $pago->id, 
                'ref' => $referencia
            ], 200);

        } catch (\Exception $e) {
            Log::error("Zelle DB Error: " . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
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