<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Comercio;
use App\Models\Promocion;

class Carousel extends Component
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
			$this->bannerRightUp = $banner1;
		}else{
            $this->bannerRightUp = Promocion::create([
                'avatar' => asset('noimage.png'),
                'order' => 1,
                'comercio_id' => 1,
                'title' => '',
                'active' => true,
                'bannerside' => 2,
            ]);
			
		}
		
		$banner2 = Promocion::where('bannerside', 2)->where('order', 2)->first();
		if($banner2 !== null)
		{
			$this->bannerRightDown = $banner2;
		}else{
			$this->bannerRightDown = Promocion::create([
                'avatar' => asset('noimage.png'),
                'order' => 2,
                'comercio_id' => 1,
                'title' => '',
                'active' => true,
                'bannerside' => 2,
            ]);
		}
        
    }

    public function render()
    {
        $promocionFirst= Promocion::query()
        ->where('active', 'active')
        ->orderBy('order', 'asc')
        ->with('product')
        ->first(); 

        $promociones = Promocion::query()
			->where('active', 'active')
            ->orderBy('order', 'asc')
            ->with('product')
            ->get();

        $lastPromocion = $promociones->last();
        $firstPromocion = $promociones->first();

        return view('livewire.components.carousel', [
            'promociones' => $promociones,
            'firstPromocion' => $firstPromocion,
            'lastPromocion' => $lastPromocion,
        ]);
    }
}
