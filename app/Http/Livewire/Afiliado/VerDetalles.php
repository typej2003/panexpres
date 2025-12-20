<?php

namespace App\Http\Livewire\Afiliado;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Comercio;
use App\Models\Product;
use App\Models\Setting;
use App\Models\SettingComercio;

class VerDetalles extends AdminComponent
{
    public $product_id;

    public $currencyValue;

    public $state = [];

    public $cantidad = 1;

    protected $listeners = ['actualizarQuantity' => 'actualizarQuantity'];

    public function mount($comercioId = 1, $productId)
    {
        
        $this->product_id = $productId;

        $this->currencyValue = request()->cookie('currency');
    }

    public function updateQuantity($operacion)
    {
        switch ($operacion) {
            case '+':
                    ++$this->cantidad;
                
                break;
            
            case '-':
                if($this->cantidad > 1)
                {
                    --$this->cantidad;
                }
                break;
            
        }
    }

    public function actualizarQuantity($value)
    {
        $this->state['quantity'] = $value;
    }

    public function sendCard($product_id )
    {
        $elemento = \Cart::get($product_id);

        if($elemento)
        {
            
            $total = floatval($elemento->quantity) + floatval($this->cantidad);
            //dd($quantity);
            \Cart::update($product_id,
                array(
                    'quantity' => array(
                        'relative' => false,
                        'value' => $total
                    ),
            ));
        }else{
            $total = floatval($this->cantidad);

            $product = Product::find($product_id); 

            if($product->in_offer == '1')
            {
                $precio = $product->price_offer;
            }else{
                $precio = $product->price1;
            }       
            
            \Cart::add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $precio,
                'quantity' => $total,
                'attributes' => array(
                    'image' => $product->image1_url,
                    'comercio_id' => $product->comercio_id,
                    'categoria_id' => $product->categoria_id,
                    'subcategoria_id' => $product->subcategoria_id,
                )
            ));
        }        

        $cartCollection = \Cart::getContent();

        if(auth()->check()){
            return redirect()->route('cart', [
                'cartCollection' => $cartCollection, 
                'words' => null,
                'comercioId' => 1, 
            ]);
        }else{
            return redirect()->route('cartOff',[
            // return view('livewire.cart.cart', [
                'cartCollection' => $cartCollection, 
                'words' => null,
                'comercioId' => 1, 
            ]);
        }

        $this->emit('changeQuantity');
        //return redirect()->back();
        //return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a su Carrito!');
    }

    public function render()
    {
        $product = Product::find($this->product_id);
        $comercio = Comercio::find($product->comercio_id);
        
        $setting = SettingComercio::where('comercio_id', $comercio->id)->first();
        
        if($setting == null)
        {
            $setting = SettingComercio::where('comercio_id', 1)->first();
        }        

        return view('livewire.afiliado.ver-detalles', [
            'product' => $product,
            'comercio' => $comercio,
            'in_cellphonecontact' => $setting->in_cellphonecontact,
            'in_sliderprincipal' => $setting->in_sliderprincipal,
            'in_marcasproductos' => $setting->in_marcasproductos,
        ]);
    }
}
