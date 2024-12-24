<?php

namespace App\Http\Livewire\Afiliado;

use Livewire\Component;

class Shipping extends Component
{
    public $nropedido;

    public function mount($nropedido = '')
    {
        $this->nropedido = $nropedido;
    }

    public function render()
    {
        return view('livewire.afiliado.shipping');
    }
}
