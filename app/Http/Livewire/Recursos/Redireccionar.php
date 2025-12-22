<?php

namespace App\Http\Livewire\Recursos;

use Livewire\Component;

class Redireccionar extends Component
{
    public function mount($opcion, $nropedido)
    {
        switch ($opcion) {
            case 'clearCart':
                // 🔑 Verifica si el carrito tiene contenido ANTES de limpiarlo
                if (\Cart::getContent()->isNotEmpty()) {
                    \Cart::clear();
                    session()->flash('cart_success', 'El carrito ha sido limpiado exitosamente.');
                    // Opcional: Forzar una actualización de la vista si es necesario
                    $this->emitSelf('$refresh'); 
                } else {
                    session()->flash('cart_info', 'El carrito ya estaba vacío.');
                }

                return redirect()->to('/');
                
                break;
            
            case 'comprarealizada':
                // 🔑 Verifica si el carrito tiene contenido ANTES de limpiarlo
                if (\Cart::getContent()->isNotEmpty()) {
                    \Cart::clear();
                    session()->flash('cart_success', 'El carrito ha sido limpiado exitosamente.');
                    // Opcional: Forzar una actualización de la vista si es necesario
                    $this->emitSelf('$refresh'); 
                } else {
                    session()->flash('cart_info', 'El carrito ya estaba vacío.');
                }

                return redirect()->to("/comprarealizada/{$nropedido}");
                
                break;
        }
        
    }
    public function render()
    {
        return view('livewire.recursos.redireccionar');
    }
}
