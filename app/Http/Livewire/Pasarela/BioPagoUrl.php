<?php

namespace App\Http\Livewire\Pasarela;

use Livewire\Component;
use Illuminate\Http\Request;

class BioPagoUrl extends Component
{
    public $response;
    public $urlPayment;

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
