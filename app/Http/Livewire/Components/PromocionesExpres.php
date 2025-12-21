<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Comercio;
use App\Models\Promocion;

class PromocionesExpres extends Component
{
    public $currencyValue = 'Bs';

    public $comercio_id;
    public $bannerRightUp;
    public $bannerRightDown;

    public function mount($comercioId = 1, $currencyValue='$')
    {
        $this->comercio_id = $comercioId;

        $this->comercio = Comercio::find($this->comercio_id);

        $this->currencyValue = request()->cookie('currency');

        $banner1 = Promocion::where('bannerside', 2)->where('order', 1)->first();
		
		if($banner1 !== null)
		{
			$this->bannerRightUp = $banner1->avatar_url;
		}else{
			$this->bannerRightUp = asset('noimage.png');
		}
		
		$banner2 = Promocion::where('bannerside', 2)->where('order', 2)->first();
		if($banner2 !== null)
		{
			$this->bannerRightDown = $banner2->avatar_url;
		}else{
			$this->bannerRightDown = asset('noimage.png');
		}
        
    }

    public function render()
    {
        $promocionFirst= Promocion::query()
        ->where('active', 'active')
        ->where('bannerside', '1')
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
            ->where('bannerside', '1')
            ->orderBy('order', 'asc')
            ->with('product')
            ->get();

        $lastPromocion = $promociones->last();
        $firstPromocion = $promociones->first();

        dd($promociones);

        return view('livewire.components.promociones-expres', [
            'promociones' => $promociones,
            'firstPromocion' => $firstPromocion,
            'lastPromocion' => $lastPromocion,
        ]);
    }
}
