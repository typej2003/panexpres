<?php

namespace App\Http\Livewire\Afiliado;

use Livewire\Component;
use App\Models\PedidoTemporal;

class Shipping extends Component
{
    public $nropedido;

    public $cambiar = false;

    // Esto asegura que cuando el radio mande un string, se convierta a booleano real

    public function irPasarelaShipping()
    {
        $pedido = PedidoTemporal::where('nropedido', $this->nropedido)->first();
        return redirect()->route('checkout.pasarela', ['nropedido' => $pedido->nropedido, 'comercioId' => $pedido->comercio_id]);
    }

    public function cambiarValor()
    {
        $this->cambiar = true;
    }

    public function mount($nropedido = '')
    {
        $this->nropedido = $nropedido;
    }

    public function render()
    {
        if(  \Cart::getTotalQuantity() == 0)
        {
            $this->description = 'No puede ejecutar back en el navegador';
            return view('livewire.error.show-error', [
                'error' => '144',
                'description' => 'No puede ejecutar back en el navegador',
            ]);
        }
        
        return view('livewire.afiliado.shipping');
    }
}
