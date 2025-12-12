<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Comercio;
use App\Models\Promocion;

class PromocionesExpres extends Component
{
    public $currencyValue = 'Bs';

    public $comercio_id;

    public function mount($comercioId = 1, $currencyValue='$')
    {
        $this->comercio_id = $comercioId;

        $this->comercio = Comercio::find($this->comercio_id);

        $this->currencyValue = request()->cookie('currency');
        
    }

    public function render()
    {
        $promocionFirst= Promocion::query()
        ->where('active', 'active')
        ->orderBy('order', 'asc')
        ->with('product')
        ->first();
        // $promociones = Promocion::query()
		// 	->where('active', 'active')
        //     ->whereNotIn('id', [$promocionFirst->id])
        //     ->orderBy('order', 'asc')
        //     ->with('product')
        //     ->get();

        // $lastPromocion = $promociones->last();
        // $firstPromocion = $promocionFirst;

        $promociones = Promocion::query()
			->where('active', 'active')
            ->orderBy('order', 'asc')
            ->with('product')
            ->get();

        $lastPromocion = $promociones->last();
        $firstPromocion = $promociones->first();

        return view('livewire.components.promociones-expres', [
            'promociones' => $promociones,
            'firstPromocion' => $firstPromocion,
            'lastPromocion' => $lastPromocion,
        ]);
    }
}
