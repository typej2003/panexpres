<?php

namespace App\Http\Livewire\Notificacion;

use Livewire\Component;
use App\Models\Pedido;
use App\Models\PedidoDetalles;

class CompraRealizada extends Component
{
    public $pedido;

    public function mount($nropedido)
    {
        $this->pedido = Pedido::where('nropedido', $nropedido)->first();

        $this->pedidoDetalles = PedidoDetalles::where('nropedido', $nropedido)->get();
    }

    public function render()
    {
        return view('livewire.notificacion.compra-realizada');
    }
}
