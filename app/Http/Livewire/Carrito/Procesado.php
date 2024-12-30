<?php

namespace App\Http\Livewire\Carrito;

use Livewire\Component;

class Procesado extends Component
{
    public function render()
    {
        \Cart::clear();
        
        return view('livewire.carrito.procesado');
    }
}
