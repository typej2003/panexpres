<?php

namespace App\Http\Livewire\Pasarela;

use Livewire\Component;
use Illuminate\Http\Request;

class Pasarela extends Component
{
    public $formapago = 0;

    public $nropedido;

    public $comercioId;

    public $currencyValue;

    public function mount(Request $request)
    {
        $this->nropedido = $request->input('nropedido');

        $this->comercioId = $request->input('comercioId');

        $this->currencyValue = request()->cookie('currency');
    }
    
    public function submitConfirmacion()
    {
        switch ($this->formapago) {
            case 'Biopago BDV':              
                
                return redirect()->route('biopago', [
                    'nropedido' => $this->nropedido, 
                    'comercioId' => $this->comercioId,
                ]);
                
                break;
        }
    }

    public function render()
    {

        return view('livewire.pasarela.pasarela');
    }
}
