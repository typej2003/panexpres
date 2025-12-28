<?php

namespace App\Http\Livewire\Pasarela;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Pedido;
use App\Models\PedidoTemporal;
use App\Models\PedidoDetalles;
use App\Models\PedidoDetallesTemporal;
use App\Models\Transaccion;
use App\Models\Pagomovil;
use App\Models\PagoZelle;
use App\Models\Tasa;
use Illuminate\Support\Facades\Session;
use Cart;

class ZelleReport extends Component
{
    // Agrupamos todos los campos en $state
    public $state = [
        'amount' => '',
        'zelle_holder' => '',
        'zelle_email' => '',
        'zelle_reference' => '',
    ];

    public $nropedido;
    public $comercio_id;
    public $pedidoTemporal;
    public $costeBs;

    public function mount($nropedido, $comercio_id)
    {
        $this->nropedido = $nropedido;

        $this->comercio_id = $comercio_id;

		$this->pedidoTemporal = PedidoTemporal::where('nropedido', $this->nropedido)->first();

        if($this->pedidoTemporal)
		{
			if( $this->llevaOfertaCantProductos())
			{
				$costoenvio = 0;
			}else{
				$costoenvio = $this->pedidoTemporal->costeenvio;
			}
			$amount = $this->convertirDolar_a_Bolivar($this->pedidoTemporal->coste + $costoenvio);

            $this->costeBs = $amount;
			
			$this->pedidoTemporal->update(['costeBs' => $amount, 'costeenvio' => $costoenvio]);

            $this->state['amount'] = $this->pedidoTemporal->coste + $costoenvio;

            $this->state['zelle_holder'] = auth()->user()->names . ' ' . auth()->user()->surnames;

            $this->state['email'] = auth()->user()->email;

        }
    }

    public function llevaOfertaCantProductos()
	{
	
		$detalles = PedidoDetallesTemporal::where('nropedido' , $this->nropedido)->get();

		foreach($detalles as $detalle)
		{
			if($detalle->product->in_offer == '1')
			{
				if($detalle->product->nroproductdelivery > 0){
					if (intval($detalle->product->nroproductdelivery) <= intval($detalle->quantity))
					{
						return true;
					}
					else{
						return false;
					}
				}else{
					return false;
				}
			}
			else{
				
				if(intval($detalle->quantity) >= intval($detalle->product->nroproductdelivery)){
					
						return true;
				}					
				else{
					return false;
				}				
			}		
		}
		
		return false;
	}

    public function convertirDolar_a_Bolivar($amount)
	{
		
		if(request()->cookie('currency') == '$')
        {
			
            $tasaValues = Tasa::where('comercio_id', $this->comercio_id)->where('status', 'activo')->first();
            if(!$tasaValues){
                $tasa = 1;
            }else{
				
                $tasa = $tasaValues->tasa;
				
            }
			
            $subtotal = round($amount*$tasa, 2);

			return $subtotal;

        }
		if(request()->cookie('currency') == 'Bs')
		{
            return $amount;
        }
	}

    public function submitZelle()
    {
        // Validación usando Validator::make con el array $state
        $validatedData = Validator::make($this->state, [
            'zelle_holder' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'reference' => 'required',
            'amount' => 'required|numeric|min:1',
        ], [
            'zelle_holder.required' => 'El nombre del titular es obligatorio.',
            'email.email' => 'Ingrese un correo electrónico válido.',
            'reference.numeric' => 'La referencia solo debe contener números.',
        ])->validate();

        $array = explode(' ', $validatedData['zelle_holder']);
        $validatedData['names'] = $array[0];

        if(count($array)>0){
            $validatedData['surnames'] =  $array[1];
        }        

        // Si llega aquí, los datos son válidos
        // $validatedData['zelle_email'], etc...

        $pedidotemporal = PedidoTemporal::where('nropedido', $this->nropedido)->first();

        $pedidodetallestemporal = PedidoDetallesTemporal::where('nropedido', $this->nropedido)->get();

        $paymentDate = date('Y-m-d H:i:s');

        $transaccion = Transaccion::create([
            'token' => $validatedData['reference'],
            'paymentId' => $validatedData['reference'],
            'cliente_id' => $pedidotemporal->user_id,
            'user_id' => $pedidotemporal->user_id,
            'comercio_id' => $pedidotemporal->comercio_id,
            'identificationNac' => $pedidotemporal->identificationNac,
            'identificationNumber' => $validatedData['reference'],
            'id_transaccion' => $validatedData['reference'],
            'reference' => $validatedData['reference'],
            'totalbs' => $this->costeBs,
            'fechaPago' => $paymentDate,
            'title' => $pedidotemporal->title,
            'description' => $pedidotemporal->description,
            'status' => 0,
            'nropedido' => $this->nropedido,
            'cellphonecode' => $pedidotemporal->cellphonecode,
            'cellphone' => $pedidotemporal->cellphone,
            'metodo' => 'Zelle',
            'currency' => '$',
            'amount' => $this->costeBs,
            'amountUsd' => $pedidotemporal->coste,
        ]);

        $pedidotemporal->update([
            'status' => 0,
            'costeBs' => $this->costeBs,
            'reference' => $validatedData['reference'],
            'metodo' => 'zelle',
            'confirmed' => 0,
        ]);

        if ($pedidotemporal) {
            
            // 2. CREAR ENCABEZADO (USANDO TU SIMPLIFICACIÓN)
            // Se asume que Pedido::$fillable contiene las columnas de PedidoTemporal.
            $pedidoData = $pedidotemporal->toArray();
            
            // Si necesitas quitar el 'id' del temporal o añadir/modificar campos, hazlo aquí:
            unset($pedidoData['id']); 
            // $pedidoData['status'] = 'procesado';

            $nuevoPedido = Pedido::create($pedidoData);
                    // 3. CREAR DETALLES (LA PARTE QUE REQUIERE EL BUCLE)

            if ($pedidodetallestemporal->isNotEmpty()) {
                
                $detallesData = [];
                $timestamp = now()->toDateTimeString(); // <--- CLAVE: Obtener la hora actual en el formato YYYY-MM-DD HH:MM:SS

                foreach ($pedidodetallestemporal as $detalleTemporal) {
                    
                    $detalleArray = $detalleTemporal->toArray();
                    
                    // --- LIMPIEZA DE CAMPOS ---
                    unset($detalleArray['id']); 
                    //unset($detalleArray['nropedido']); 
                    
                    // --- CORRECCIÓN DE FECHAS ---
                    // 1. Quitar las fechas originales serializadas del temporal
                    unset($detalleArray['created_at']); 
                    unset($detalleArray['updated_at']);
                    
                    // 2. Insertar las fechas en el formato correcto para MySQL
                    $detalleArray['created_at'] = $timestamp; 
                    $detalleArray['updated_at'] = $timestamp;
                    
                    // --- ASIGNACIÓN DE CLAVE FORÁNEA ---
                    $detalleArray['pedido_id'] = $nuevoPedido->id;
                    
                    $detallesData[] = $detalleArray;
                    
                }

                //dd($detallesData);

                // Insertar todos los detalles de una vez
                PedidoDetalles::insert($detallesData); 
            }

            // 4. (Opcional) Eliminar los registros temporales
            PedidoTemporal::where('nropedido', $this->nropedido)->delete();
            PedidoDetallesTemporal::where('nropedido', $this->nropedido)->delete();
        }
        
        session()->flash('success', 'Reporte de Zelle enviado correctamente.');

        // Revisar si el pago existe
        $pagozelle = PagoZelle::where('alias_identificador', $validatedData['reference'])->first();

        if($pagozelle){
            $nuevoPedido->update(['confimed'=> 1]);
            $transaccion->update(['status'=> 1]);
        }

        return redirect()->to('/redireccionar/comprarealizada/' . $this->nropedido);

        // return back();
    }

    public function goBack()
    {
        return redirect()->route('mainpayment', [
				'nropedido' => $this->nropedido, 
				'comercio_id' => $this->comercio_id,
			]);
    }

    public function render()
    {
        return view('livewire.pasarela.zelle-report');
    }
}