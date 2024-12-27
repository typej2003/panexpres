<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Product;

class ResultsProducts extends AdminComponent
{
    public $parametro = '';

    public $informacion = '';

    public $currencyValue;

    public $productsRecibidos;

    public $comercio_id;

    public $manufacturer_id, $modelo_id, $motor_id;

    protected $listeners = ['infoRecibida' => 'actualizarInfo'];

    public function actualizarInfo($data, $manufacturer, $products)
    {
        $this->parametro = $manufacturer;

        $this->informacion = $data;

        $this->productsRecibidos = $products;
    }

    public function mount($comercioId = 1, $parametro, $manufacturer_id, $modelo_id, $motor_id)
    {
        $this->comercio_id = $comercioId;

        $this->parametro = $parametro;
        
        $this->manufacturer_id = $manufacturer_id;

        $this->modelo_id = $modelo_id;

        $this->motor_id = $motor_id;

        $this->currencyValue = request()->cookie('currency');
        
    }

    public function sendCard($product_id, $quantity )
    {
        $product = Product::find($product_id);
        
        \Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price1,
            'quantity' => $quantity,
            'attributes' => array(
                'image' => $product->image1_url,
                'comercio_id' => $product->comercio_id,
                'categoria_id' => $product->categoria_id,
                'subcategoria_id' => $product->subcategoria_id,
            )
        ));

        $this->emit('changeQuantity');
        //return redirect()->back();
        //return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a su Carrito!');
    }

    public function render()
    {
        $products = Product::query();

        if($this->comercio_id !== 1)
        {
            $products = $products
                ->where('comercio_id', $this->comercio_id);    
        }
        $products = $products
            ->where('name', 'like', '%'. $this->parametro . '%');
        $products = $products
            ->orWhere('description', 'like', '%'. $this->parametro . '%');
        
        $products = $products
            ->WhereHas('categories', function($q){
                $q->where('name', 'like', '%'. $this->parametro . '%');
            });
        
        $products = $products->paginate(15);

        return view('livewire.components.results-products', [
            'products' => $products,
        ]);
    }
}
