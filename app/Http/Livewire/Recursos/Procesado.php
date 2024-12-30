<?php

namespace App\Http\Livewire\Recursos;

use Livewire\Component;

class Procesado extends Component
{

    public function render()
    {
        \Cart::clear();
        
        return view('livewire.recursos.procesado');
    }
}
