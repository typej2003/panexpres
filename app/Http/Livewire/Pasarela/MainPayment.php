<?php

namespace App\Http\Livewire\Pasarela;

use Illuminate\Http\Request;
use Livewire\Component;

class MainPayment extends Component
{
    public $nropedido;
    public $step = 'selector'; // selector, biopago, zelle
    public $amount = 0;
    
    // Propiedades para Zelle
    public $zelle_holder, $zelle_email, $zelle_reference;

    public function mount($nropedido, $comercio_id)
    {
        $this->nropedido = $nropedido;

        $this->comercio_id = $comercio_id;
    }

    public function selectMethod($method)
    {
        $this->step = $method;
    }

    

    public function render()
    {
        return view('livewire.pasarela.main-payment');
    }
}