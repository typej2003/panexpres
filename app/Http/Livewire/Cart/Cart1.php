<?php

namespace App\Http\Livewire\Cart;

use App\Http\Livewire\Admin\AdminComponent;
use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\Pedido;
use App\Models\PedidoDetalles;
use App\Models\Tasa;
use App\Models\Impuesto;
use App\Models\SettingComercio;
use App\Http\Controllers\CartController;
use App\Http\Livewire\Cart\PedidoProduct;

use Cart;

class Cart1 extends AdminComponent
{
    public $comercio_id; 

    public $currencyValue;

    public $IGTF = 0;
    public $impuesto = 0;
    public $subtotal = 0;
    
    protected $listeners = [
        'emitCurrency' => 'emitCurrency'
    ];

    public function mount($comercioId = 1)
    {
        $this->comercio_id = $comercioId;
        $this->currencyValue = request()->cookie('currency');
    }

    public function emitCurrency($currencyValue, Request $request)
    {
        $this->currencyValue = $request->cookie('currency');

    }

    
    public function finalizarCompra()
    {        
        $cart = new CartController;
        $contenido = $cart->contenido();
        $title = 'Compra';
        $descripcion = '';

        foreach($contenido as $elemento)
        {
            if($descripcion !== '')
            {
                $descripcion .= ' / ';
            }
            $descripcion .= $elemento->name;
            $descripcion .= ' - '. $elemento->quantity;
            $descripcion .= ' - '. $elemento->price;
        }
        
        $pedidoref = auth()->user()->identificationNumber . '-' . str_replace("-", "", date("Y-m-d")) . str_replace(":", "", date("H:i:s"));

        $pedido = Pedido::create([
            'pedido' => $pedidoref,
            'title' => $title,
            'description' => $descripcion,
            'comercio_id' => $this->comercio_id,
            'user_id' => auth()->user()->id,
            'description' => '',
            'coste' => $cart->total(),
            'currency' => 1,
            'in_delivery' => 0,
            'confirmed' => 0,
        ]);

        //para guardar los detalles en la tabla PedidoDetalles

        $pedido_id = $pedido->id;

        foreach($contenido as $elemento)
        {
            $pedido = PedidoDetalles::create([
                'pedido_id' => $pedido_id,
                'pedido' => $pedido->pedido,                
                'comercio_id' => $this->comercio_id,
                'user_id' => auth()->user()->id,
                'product_id' => $elemento->id,
                'name' => $elemento->name,
                'price1' => $elemento->price,
                'quantity' => $elemento->quantity,
            ]);
        }

        $cart->onlyClear();

        return redirect()->route('shipping', ['nropedido' => $pedido->pedido]);
        // return redirect()->route('pasarela', ['pedido' => $pedido->pedido, 'comercioId' => $this->comercio_id]);
    }
    

    public function updateQuantity($id, $value, $operacion)
    {
        switch ($operacion) {
            case '-':
                if($value > 0){
                    $value--;
                    if($value > 0){
                        \Cart::update($id,
                            array(
                                'quantity' => array(
                                    'relative' => false,
                                    'value' => $value
                                ),
                        ));
                    }else{
                        \Cart::remove($id);
                    }
                } 
                break;
            
            case '+':                
                    $value++;
                    \Cart::update($id,
                        array(
                            'quantity' => array(
                                'relative' => false,
                                'value' => $value
                            ),
                    ));
                break;
        }


        $cartCollection = \Cart::getContent();

        return redirect()->back()->with(['cartCollection' => $cartCollection]);
        // return view('livewire.cart.cart')->with('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);
        // return redirect()->route('cart.index')->with('success_msg', 'El Carrito ha sido Actualizado');
    }

    public function getTotal()
    {
        return round($this->subtotal + $this->impuesto + $this->IGTF, 2);
    }

    public function getSubTotal($comercio_id = 1)
    {
        $subtotal = \Cart::getTotal();

        $tasaValues = Tasa::where('comercio_id', $comercio_id)->first();

        if(!$tasaValues){
            $tasa = 1;
        }else{
            $tasa = $tasaValues->tasa;
        }
        switch ($this->currencyValue) {
            case 'Bs':
                $subtotal = round($subtotal*$tasa, 2) - $this->amountImpuesto();
                break;
            case '$':
                $subtotal = round($subtotal, 2) - $this->amountImpuesto();
                break;            
        }

        $this->subtotal = $subtotal;

        return $subtotal;
    }

    public function amountImpuesto($comercio_id = 1)
    {
        $totalProducts = \Cart::getTotal();
        $settingComercio = SettingComercio::where('comercio_id', $comercio_id)->first();

        $tasaValues = Tasa::where('comercio_id', $comercio_id)->first();

        if(!$tasaValues){
            $tasa = 1;
        }else{
            $tasa = $tasaValues->tasa;
        }

        
        //realiza cambio monetario para sacar el impuesto
        switch ($this->currencyValue) {
            case 'Bs':
                if($settingComercio->in_impuesto == 'SI'){
                    $impuesto = Impuesto::where('comercio_id', $comercio_id)->where('name', 'IVA')->first();
                    if($impuesto){
                        $result = $tasa * $totalProducts - $tasa * $totalProducts*$impuesto->amount/100;
                        $this->impuesto = $result;
                    }else{
                        $this->impuesto = 0;
                        return '0,00';
                    }
                }else{
                    $this->impuesto = 0;
                    return '0,00';
                }
                return round($result, 2);
                break;            
            case '$':
                
                if($settingComercio->in_impuesto == 'SI'){
                    $impuesto = Impuesto::where('comercio_id', $comercio_id)->where('name', 'IVA')->first();
                    if($impuesto){
                        $result = $tasa * $totalProducts*$impuesto->amount/100;
                        $this->impuesto = $result;
                    }else{
                        $this->impuesto = 0;
                        return '0,00';
                    }
                }else{
                    $this->impuesto = 0;
                    return '0,00';
                }
                return round($result, 2);
                break;            
        }
        // fin de cambio
        
    }

    public function amountIGTF($comercio_id = 1)
    {
        $totalProducts = \Cart::getTotal();
        $settingComercio = SettingComercio::where('comercio_id', $comercio_id)->first();

        $tasaValues = Tasa::where('comercio_id', $comercio_id)->first();

        if(!$tasaValues){
            $tasa = 1;
        }else{
            $tasa = $tasaValues->tasa;
        }

        //realiza cambio monetario para sacar el impuesto
        switch ($this->currencyValue) {
            case 'Bs':
                if($settingComercio->in_impuesto == 'SI'){
                    $impuesto = Impuesto::where('comercio_id', $comercio_id)->where('name', 'IVA')->first();
                    if($impuesto){
                        $result = $tasa * $totalProducts - $tasa * $totalProducts*$impuesto->amount/100;
                        $this->IGTF = $result;
                    }else{
                        $this->IGTF = 0;
                        return '0,00';
                    }
                }else{
                    $this->IGTF = 0;
                    return '0,00';
                }
                return round($result, 2);
                break;            
            case '$':
                if($settingComercio->in_impuesto == 'SI'){
                    $impuesto = Impuesto::where('comercio_id', $comercio_id)->where('name', 'IGTF')->first();
                    if($impuesto){
                        $result = $tasa * $totalProducts*$impuesto->amount/100;
                        $this->IGTF = $result;
                    }else{
                        $this->IGTF = 0;
                        return '0,00';
                    }
                }else{
                    $this->IGTF = 0;
                    return '0,00';
                }
                return round($result, 2);
                break;            
        }
        // fin de cambio
    }

    public function  crearArray()
    {
        $ordena = [];
        $pedidos = [];
        $listpedidos = array();
        $elementArray = array();
        $products = [];

        $cartCollection = \Cart::getContent();

        foreach($cartCollection as $item){
            array_push($products, new PedidoProduct($item->id, $item->name, $item->price, $item->quantity, $item->attributes->comercio_id));            
        }
        
        $x = 0;
        foreach($products as $item){
            $x++;
            //revisa si se encuentra en la lista
            $existe = false;            
            for ($i=0; $i < count($listpedidos); $i++) { 
                $arr = $listpedidos[$i];                
                foreach($arr as $element){                    
                    if($item->comercio_id == $element->comercio_id){
                        array_push($arr, $item);
                        $listpedidos[$i] = $arr;
                        $existe = true;
                        break;
                    }
                }
            }
            
            if(!$existe){                
                array_push($elementArray, $item);
                array_push($listpedidos, $elementArray);
            }
        }

        return $listpedidos;

    }

    public function index()
    {
        $setting = Setting::find(1)->first();

        $words = '';

        $conf = Setting::where('id', 1)->first();
        
        $cartCollection = \Cart::getContent();

        $this->currencyValue = request()->cookie('currency');

        return view('cart.cart', [
            'in_cellphonecontact' => $setting->in_cellphonecontact, 
            'comercio_id' => 1,
            'manufacturer_id' => 0,
            'modelo_id' => 0,
            'motor_id' => 0, 
            'words' => $words,
            'cartCollection' => $cartCollection,
            'listpedidos' => $this->crearArray(),
        ]);
    }

    public function render()
    {

        $setting = Setting::find(1)->first();

        $words = '';

        $conf = Setting::where('id', 1)->first();
        
        $cartCollection = \Cart::getContent();

        return view('livewire.cart.cart1', [
            'in_cellphonecontact' => $setting->in_cellphonecontact, 
            'comercio_id' => 1,
            'manufacturer_id' => 0,
            'modelo_id' => 0,
            'motor_id' => 0, 
            'words' => $words,
            'cartCollection' => $cartCollection,
            'listpedidos' => $this->crearArray(),
        ]);
    }
}

