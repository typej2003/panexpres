<?php

namespace App\Http\Livewire\Afiliado;

use Livewire\Component;
use App\Models\PedidoTemporal;
use App\Models\DatosDeliveryUser;
use App\Models\DeliveryArea;

class Shipping extends Component
{
    public $nropedido;

    public $cambiar = false;

    public $datosdeliveryuser;

    public $pedidotemporal;

    // Esto asegura que cuando el radio mande un string, se convierta a booleano real

    public function irPasarelaShipping()
    {
        $pedido = PedidoTemporal::where('nropedido', $this->nropedido)->first();
        return redirect()->route('checkout.pasarela', ['nropedido' => $pedido->nropedido, 'comercioId' => $pedido->comercio_id]);
    }

    public function cambiarValor()
    {
        $this->cambiar = true;
    }

    public function mount($nropedido = '')
    {
        $this->nropedido = $nropedido;

        $this->pedidotemporal = PedidoTemporal::where('nropedido', $this->nropedido)->first();

        $datosdeliveryuser = DatosDeliveryUser::where('user_id', auth()->user()->id)->first();

        if ($datosdeliveryuser) {
            // Convertimos a colección y filtramos los que están vacíos o null
            $tieneCamposVacios = collect($datosdeliveryuser->toArray())->contains(fn($value) => empty($value));
            
            if ($tieneCamposVacios || $datosdeliveryuser->deliveryarea_id == 0) {
                
                // Al menos uno es null, "" (string vacío) o []
                $datosdeliveryuser->update(['deliveryarea' => '', 'costeenvio' => 0]);
                $this->cambiar = true;
                // return "Faltan datos por completar";
            } else {
                if(($datosdeliveryuser->deliveryarea_id !== 0) || ($datosdeliveryuser->deliveryarea_id !== null)){
                    $deliveryarea = DeliveryArea::where('id', $datosdeliveryuser->deliveryarea_id)->first();
                    $this->pedidotemporal->update(['costeenvio' => $deliveryarea->coste]);
                    $this->cambiar = false;
                }else{

                    $datosdeliveryuser->deliveryarea = '';
                    $this->cambiar = true;
                }
                // return "Todo está lleno";
            }
        } else {
            $this->cambiar = true;
            // return "El registro ni siquiera existe";
        }

        // if($datosdeliveryuser !== null)
        // {
        //     if($pedido->costeenvio !==null || $pedido->costeenvio !==0 )
        //     {
        //         $this->cambiar = false;
        //     }
        // }else{
        //     $this->cambiar = false;
        // }
        // $this->cambiar = true;
    }

    public function render()
    {
        if(  \Cart::getTotalQuantity() == 0)
        {
            $this->description = 'No puede ejecutar back en el navegador';
            return view('livewire.error.show-error', [
                'error' => '144',
                'description' => 'No puede ejecutar back en el navegador',
            ]);
        }
        
        return view('livewire.afiliado.shipping');
    }
}
