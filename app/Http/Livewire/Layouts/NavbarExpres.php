<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use App\Models\Comercio;
use App\Models\Category;
use App\Models\Tasa;
use App\Models\Setting;
use App\Models\SettingUser;

class NavbarExpres extends Component
{
    public $comercio;
    public $comercio_id;

    
    public function mount($comercioId = 1){

        $this->comercio_id = $comercioId;

        // dd($manufacturer_id);

        $this->categories = Category::where('comercio_id', $this->comercio_id)
                                    ->where('itemMenu', 1)
                                    ->get();
        
        $this->comercio = Comercio::find($this->comercio_id);
        
        $setting = Setting::where('user_id', $this->comercio->user_id)->first();
        // $settingUser = SettingUser::where('user_id', auth()->user()->id)->first();
        $settingUser = new  SettingUser;
        $settingUser->client($this->comercio->id);

        if($setting){
            if($setting->api_bcv=="SI"){
                $dolar = json_decode(file_get_contents("https://pydolarve.org/api/v1/dollar"), true);

                $dolar = $dolar['monitors']['bcv']['price'];
                
                $this->tasacambio = $dolar;
            }else{
                $tasa = Tasa::where('status','activo')
                    ->where('user_id', $this->comercio->user_id)
                    ->first();
                    
                if($tasa){
                    $this->tasacambio = $tasa->tasa;
                }else{
                    $this->tasacambio = 1;
                }
            }
            
            $this->currencyValue = $settingUser->currency;
        }
        
    }

    public function clearCar()
    {
        
        
        $cart = new CartController;

        $cart->onlyClear();

    }

    public function cartRuta()
    {
        
        $cartCollection = \Cart::getContent();

        if(auth()->check()){
            return redirect()->route('cart', [
                'cartCollection' => $cartCollection, 
                'words' => null,
                'comercioId' => $this->comercio_id, 
                
            ]);
        }else{
            
            return redirect()->route('cartOff',[
            // return view('livewire.cart.cart', [
                'cartCollection' => $cartCollection, 
                'words' => null,
                'comercioId' => $this->comercio_id,                 
            ]);
        }
    }

    public function render()
    {
        return view('livewire.layouts.navbar-expres');
    }
}
