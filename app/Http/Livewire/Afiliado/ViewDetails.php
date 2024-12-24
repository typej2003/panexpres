<?php

namespace App\Http\Livewire\Afiliado;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Comercio;
use App\Models\Product;
use App\Models\Setting;

class ViewDetails extends AdminComponent
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
        $product = Product::find($this->product_id);
        $comercio = Comercio::find($product->comercio_id);
        
        $setting = Setting::find($comercio->id)->first();

        return view('livewire.afiliado.view-details', [
            'product' => $product,
            'comercio' => $comercio,
            'in_cellphonecontact' => $setting->in_cellphonecontact,
            'in_sliderprincipal' => $setting->in_sliderprincipal,
            'in_marcasproductos' => $setting->in_marcasproductos,
            'manufacturer_id' => '',
            'modelo_id' => '',
            'motor_id' => '',
        ]);
    }
}
