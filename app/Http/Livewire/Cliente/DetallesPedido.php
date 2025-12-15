<?php

namespace App\Http\Livewire\Cliente;

use Livewire\Component;
use App\Models\Pedido;
use App\Models\PedidoTemporal;
use App\Models\PedidoDetalles;
use App\Models\PedidoDetallesTemporal;

class DetallesPedido extends Component
{
    public $nropedido;

    public function mount($nroPedido)
    {
        $this->nropedido = $nroPedido;
    }

    public function render()
    {
        $pedido = Pedido::where('nropedido', $this->nropedido)->first();
        if($pedido){
            $detalles = PedidoDetalles::where('nropedido', $this->nropedido)->paginate();
        }else{
            $pedido = PedidoTemporal::where('nropedido', $this->nropedido)->first();
            $detalles = PedidoDetallesTemporal::where('nropedido', $this->nropedido)->paginate();
        }

        return view('livewire.cliente.detalles-pedido', [
            'pedido' => $pedido,
            'detalles' => $detalles,
        ]);
    }
}
