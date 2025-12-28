<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PagoZelle;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class ZelleController extends Controller
{
    public function receive(Request $request)
    {
        $body = $request->input('body'); // El texto que manda Google

        // --- EXTRACCIÓN DE DATOS (REGEX) ---
        // Nota: Estos patrones son estándar, pero los ajustaremos 
        // cuando me envíes el ejemplo del texto real.
        
        preg_match('/Amount:\s*\$([0-9,.]+)/i', $body, $montoMatch);
        preg_match('/Confirmation\s*(?:#|Number):\s*(\w+)/i', $body, $refMatch);
        preg_match('/from\s+([a-zA-Z\s]+?)\s+(?:sent|on)/i', $body, $nameMatch);

        $monto = isset($montoMatch[1]) ? (float) str_replace(',', '', $montoMatch[1]) : 0;
        $referencia = $refMatch[1] ?? null;
        $remitente = trim($nameMatch[1] ?? 'Desconocido');

        if ($referencia) {
            // Usamos updateOrCreate para evitar duplicados si el script reenvía algo
            $pago = PagoZelle::updateOrCreate(
                ['referencia' => $referencia],
                [
                    'remitente' => $remitente,
                    'monto' => $monto,
                    'estado' => 'Completada',
                    'fecha_pago' => Carbon::now(),
                    'nota' => 'Procesado vía Webhook Gmail',
                ]
            );

            Log::info("Pago Zelle guardado: Ref " . $referencia);
            return response()->json(['status' => 'success', 'id' => $pago->id], 200);
        }

        return response()->json(['status' => 'error', 'message' => 'No se encontró referencia'], 400);
    }
}