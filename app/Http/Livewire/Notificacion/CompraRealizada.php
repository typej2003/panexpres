<?php

namespace App\Http\Livewire\Notificacion;

use Livewire\Component;
use App\Models\Pedido;
use App\Models\PedidoDetalles;

class CompraRealizada extends Component
{
    public $pedido;

    public function mount($pedido_id=1)
    {
        $this->pedido = Pedido::find($pedido_id);
        $this->pedidoDetalles = PedidoDetalles::where('pedido_id', $pedido_id)->get();
    }

    public function render()
    {
        return view('livewire.notificacion.compra-realizada');
    }
}
