<?php

namespace App\Http\Livewire\Pasarela;

use Livewire\Component;
use Illuminate\Http\Request;

class BioPagoUrl extends Component
{
    public $response;
    public $urlPayment;
    
    protected $listeners = [
        'clearCartJs' => 'clearCart', // Cuando JS emita 'clearCartJs', Livewire llama a clearCart()
    ];

    public function clearCart()
    {
        // 🔑 Verifica si el carrito tiene contenido ANTES de limpiarlo
        if (\Cart::getContent()->isNotEmpty()) {
            \Cart::clear();
            session()->flash('cart_success', 'El carrito ha sido limpiado exitosamente.');
            // Opcional: Forzar una actualización de la vista si es necesario
            $this->emitSelf('$refresh'); 
        } else {
            session()->flash('cart_info', 'El carrito ya estaba vacío.');
        }
    }

    public function mount(Request $request)
    {
        

        $this->response = $request->input('response');

        $this->urlPayment = $request->input('urlPayment');
       
        // Ejemplo de uso:
        // return view('biopago.formulario', ['transactionStatus' => $status]);
    }

    public function render()
    {
        return view('livewire.pasarela.bio-pago-url');
    }
}
