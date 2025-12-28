<?php

namespace App\Http\Livewire\Transaccion;

use Livewire\Component;
use App\Models\PagoZelle;
use Livewire\WithPagination;

class ListPagoZelle extends Component
{
    use WithPagination;

    // Esto permite que la tabla se actualice si usas polling
    protected $listeners = ['pagoProcesado' => '$refresh'];

    public function render()
    {
        return view('livewire.transaccion.list-pago-zelle', [
            'pagos' => PagoZelle::orderBy('fecha_pago', 'desc')->paginate(10)
        ]);
    }
}