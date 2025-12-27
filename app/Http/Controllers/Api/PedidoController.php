<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedidos = Pedido::where('userdelivery_id', $id)->get();

        return response()->json([
            'pedidos' => $pedidos,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function actualizarEstado(Request $request)
    {
        // Buscamos el pedido por el nropedido enviado
        $pedido = Pedido::where('nropedido', $request->nropedido)->first();

        if ($pedido) {
            $pedido->pedidoentregado = $request->valor; // 'atendido' o 'suspendido'
            $pedido->fecha_entrega = $request->fecha_entrega; // La fecha enviada por el app
            $pedido->save();

            return response()->json(['message' => 'Estado actualizado correctamente'], 200);
        }

        return response()->json(['message' => 'Pedido no encontrado'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
