<?php

namespace App\Http\Livewire\Afiliado;

use Livewire\Component;

class VerDetalles extends Component
{

    public $product_id;

    public $currencyValue;

    public function mount($productId)
    {
        
        $this->product_id = $productId;

        $this->currencyValue = request()->cookie('currency');
    }
    
    public function render()
    {
        return view('livewire.afiliado.ver-detalles');
    }
}
