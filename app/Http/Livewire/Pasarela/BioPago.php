<?php

namespace App\Http\Livewire\Pasarela;

//use App\Http\Controllers\Api\ApiProcessPaymentController;
use App\Http\Controllers\CartController;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\PedidoDetalles;
use App\Models\PedidoTemporal;
use App\Models\PedidoDetallesTemporal;
use App\Models\Transaccion;
use App\Models\Pagomovil;
use Illuminate\Support\Facades\Session;
use Cart;

class BioPago extends Component
{
    // Propiedades del formulario (deben estar sincronizadas con los inputs)
    public $amount = 1.00; // Ejemplo
    public $identificationNac = 'V';
    public $identificationNumber = '';
    public $email = '';
    public $currency = 1;
    public $reference;
    public $rifLetter = 'V'; 
    public $rifNumber = '';
    public $title = 'Compra por Internet';
    public $description = 'Descripcion de la compra';
    public $cellphone1 = '';
    public $cellphone = '';

	public $pedidoTemporal; 
    
    // Método para manejar la persistencia del formulario después del error
    public $showForm = true; // No lo usamos para el paso, pero sí para la visibilidad interna si es necesario.

    // Reglas de validación
    protected $rules = [
        'amount' => 'required',
        'cellphone' => 'required',
        'identificationNac' => 'required|in:V,E,P',
        'identificationNumber' => 'required',
        'email' => 'required|email',
    ];

	public function mount(Request $request)
    {
        $this->nropedido = $request->input('nropedido');

        $this->comercioId = $request->input('comercioId');

		$this->pedidoTemporal = PedidoTemporal::where('nropedido', $this->nropedido)->first();
		if($this->pedidoTemporal)
		{
			$this->amount = $this->pedidoTemporal->coste;
			$this->identificationNac = $this->pedidoTemporal->client->identificationNac;
			$this->identificationNumber = $this->pedidoTemporal->client->identificationNumber;
			$this->email  = $this->pedidoTemporal->client->email;
			$this->currency = $this->pedidoTemporal->getMonedaAttributeN();
			$this->reference = $this->pedidoTemporal->nropedido;
			$this->rifLetter  = '';
			$this->rifNumber = '';
			$this->title = 'Compra por Internet';
			$this->description = 'Descripcion de la compra';
			$this->cellphone1 = $this->pedidoTemporal->client->datosbasicos->cellphonecode . $this->pedidoTemporal->client->datosbasicos->cellphone;

			// dd($this->pedidoTemporal->client->datosbasicos);

			// dd($this->pedidoTemporal->client->datosbasicos->cellphonecode . $this->pedidoTemporal->client->datosbasicos->cellphone);
			$this->cellphone = $this->pedidoTemporal->client->datosbasicos->cellphonecode . $this->pedidoTemporal->client->datosbasicos->cellphone;
		}

    }

    public function submitForm()
    {
        // Si la validación falla, Livewire detiene la ejecución, re-renderiza 
        // y MANTIENE los valores de las propiedades y el componente visible.
        $this->validate(); 
		
		//Creación de solicitud de pago
        $Payment = new IpgBdvPaymentRequest();  

		$reference = $this->reference . '/' . $this->cellphone;

		$Payment->idLetter= $this->identificationNac; //Letra de la cédula - V, E o P
        $Payment->idNumber= $this->identificationNumber; //Número de cédula
		$Payment->amount= $this->amount; //Monto a combrar, DECIMAL
		$Payment->currency= $this->currency; //Moneda del pago, 0 - Bolivar Fuerte, 1 - Dolar
		$Payment->reference= $reference; //Código de referecia o factura
        $Payment->title= $this->title; //Titulo para el pago, Ej: Servicio de Cable
        $Payment->description= $this->description; //Descripción del pago, Ej: Abono mes de marzo 2017
        $Payment->email= $this->email;
        $Payment->cellphone= $this->cellphone;    
		$Payment->rifLetter= $this->rifLetter ?? ''; //Letra de la cédula - V, E o P
        $Payment->rifNumber= $this->rifNumber ?? ''; //Número de cédula

		//$Payment->urlToReturn= $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].'/ipg2-bdv-demo/success.php?token={ID}'; //URL de retrono al finalizar el pago

		$Payment->urlToReturn= "https://"."://".$_SERVER['HTTP_HOST'].'/ipg2-bdv-demo/success.php?token={ID}'; //URL de retrono al finalizar el pago

        //$Payment->urlToReturn= "http://localhost:8585/";
        // $Payment->urlToReturn= "https://ddrsistemas.com/pasarelape/procesado.php";

		//usado para panexpres.com
        //$Payment->urlToReturn= "https://panexpres.com/pagosatisfactorio/{ID}";	

		//usado para Mikrotik
		$Payment->urlToReturn= "https://panexpres.com/pagosatisfactorioPanexpres/{ID}";

		//dd($Payment);

		/*dd('
			$Payment->idLetter= '.$Payment->idLetter.' 
			$Payment->idNumber= '.$Payment->idNumber.' 
			$Payment->amount= '.$Payment->amount.' 
			$Payment->currency= '.$Payment->currency.' 
			$Payment->reference= '.$Payment->reference.' 
			$Payment->title= '.$Payment->title.' 
			$Payment->description= '.$Payment->description.' 
			$Payment->email= '.$Payment->email.' 
			$Payment->cellphone= '.$Payment->cellphone.' 
			$Payment->urlToReturn= '.$Payment->urlToReturn.' 
			$Payment->rifLetter= '.$Payment->rifLetter.' 
			$Payment->rifNumber= '.$Payment->rifNumber.' 
		');*/

		$demo = "NO";

        if( $demo == "SI" ) {
            $PaymentProcess = new IpgBdv2 ("70527030","z0tTsYq3");
        } else {
             $PaymentProcess = new IpgBdv2 ("76669805","0Ih2wwzK");
        }

        $response = $PaymentProcess->createPayment($Payment);

		if ($response->success == true) // Se procesó correctamente y es necesario redirigir a la página de pago
        {
			$resultado = 'true';
			$urlPayment = $response->urlPayment;
			// if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest') { //si es ajax
            //      header('Content-type: application/json');
            //      echo json_encode($response);			
            //  }
            //  else{ //si no es ajax
            //      header("Location: ".$response->urlPayment); //W
            //      die();
            //  }	
            
            return redirect()->route('biopagourl', [
				'response' => $response, 
				'urlPayment' => $urlPayment,
			]);
        }
        else
        {
			
            Session::flash('error', 'Error: ' . $response->responseCode . ', ' . $response->responseMessage);

            // Opción 2: Redirigir hacia atrás (a la página que enviaba el formulario)
            return redirect()->back();
            
			$resultado = 'false';
             header('Content-type: application/json');
             echo json_encode($response);
        }
		/*
		*/	
        $remote_addr = $_SERVER['REMOTE_ADDR'];	

        return response()->json([
                // 'message' => 'Datos recibidos completos',
                // 'identificationNac' => $request->post('identificationNac'),
				// 'identificationNumber' => $request->post('identificationNumber'),
				// 'amount' => $request->post('amount'),
				// 'currency' => $request->post('currency'),
				// 'reference' => $request->post('reference'),
				// 'title' => $request->post('title'),
				// 'description' => $request->post('description'),
				// 'email' => $request->post('email'),
				// 'cellphone' => $request->post('cellphone'),
				// 'cellphone1' => $request->post('cellphone1'),
				// 'rifLetter' => $request->post('rifLetter'),
				// 'rifNumber' => $request->post('rifNumber'),
				// 'datos' => $datos,
				// 'resultado' => $resultado,
				// 'urlPayment' => $response->urlPayment,
				'response' => $response
            ], 200)->header('Access-Control-Allow-Origin', '*');
        
    }

    // Método que se llama al hacer clic en el botón "Volver"
    public function goBack()
    {
        // Emitimos un evento al componente padre para que cambie de paso (Paso 2 -> Paso 1)
        $this->dispatch('goBackToSelection');
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.pasarela.bio-pago');
    }

	public function registrarReferencia($id)
    {
        $token = $id;

		$demo = "NO";
		if( $demo == "SI" ){                
			$PaymentProcess = new IpgBdv2 ("70527030","z0tTsYq3");
		} else {
			$PaymentProcess = new IpgBdv2 ("76669805","0Ih2wwzK");
		}
		
		$datos = $PaymentProcess->checkPayment($token);
        //$datos = $this->SearchPayment($token);
    
        if($datos->success == 'true')
        {
          	$reference = explode('/', $datos->reference)[0];

		  	//$pedido_id = explode('-', str_replace('Pedido ', '', $reference, ))[0];
    
          	//$pedido = Pedido::find($pedido_id);
		  	$pedidotemporal = PedidoTemporal::where('nropedido', $reference)->first();
		  	$pedidodetallestemporal = PedidoDetallesTemporal::where('nropedido', $reference)->get();
    
          	$paymentDate = date('Y-m-d H:i:s', strtotime($datos->paymentDate));
    
          	$transaccion = Transaccion::create([
				'token' => $token,
				'paymentId' => $token,
				'cliente_id' => $pedidotemporal->user_id,
				'user_id' => $pedidotemporal->user_id,
				'comercio_id' => $pedidotemporal->comercio_id,
				'identificationNumber' => $datos->idNumber,
				'id_transaccion' => $datos->transactionId,
				'reference' => $datos->reference,
				'totalbs' => $datos->amount,
				'fechaPago' => $paymentDate,
				'title' => $datos->title,
				'description' => $datos->description,
				'status' => 1,
				'nropedido' => $datos->reference,
          	]);
    
           	$pedidotemporal->update([
				'status' => 1,
				'reference' => $datos->transactionId,
				'metodo' => 'tarjeta',
				'confirmed' => 1,
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
					
					foreach ($pedidodetallestemporal as $detalleTemporal) {
						
						// Convertir el detalle temporal a array
						$detalleArray = $detalleTemporal->toArray();
						
						// Quitar el 'id' del temporal y el 'nropedido' antiguo
						unset($detalleArray['id']); 
						//unset($detalleArray['nropedido']); 
						
						// CLAVE: Asignar el ID del pedido permanente al detalle
						$detalleArray['pedido_id'] = $nuevoPedido->id; 
						
						// Usaremos la inserción en lote por eficiencia
						$detallesData[] = $detalleArray;
					}

					// Insertar todos los detalles de una vez
					PedidoDetalles::insert($detallesData); 
				}
				
				// 4. (Opcional) Eliminar los registros temporales
				PedidoTemporal::where('nropedido', $reference)->delete();
				PedidoDetallesTemporal::where('nropedido', $reference)->delete();
			}
			$pedido = $pedidotemporal->toArray();

			$pedidodetalles = $pedidodetallestemporal->toArray();

        	Pedido::create($pedido);

			PedidoDetalles::create($pedidodetalles);

			\Cart::clear();

            return ['status' => false, 'token' =>$token];
        }
		else{
			return ['status' => false];
		}
    }
}


class IpgBdv2
{
	private const ACCESS_TOKEN = 'accessToken';

		// Produccion
		private const URL_API = 'https://biopago.banvenez.com/IPG2/api/Payments';
		private const URL_AUTH = 'https://biopago.banvenez.com/IPG2/connect/token';
	
	function __construct($user,$pass){

		session_start();		
		if(!isset($_SESSION[self::ACCESS_TOKEN])){
			$_SESSION[self::ACCESS_TOKEN] = '';
		}

		$this->user = $user;
		$this->pass = $pass;
		$this->messages = array(
				0 => "Operación efectuada correctamente",
				1 => "Request NO válido, verifique el formato con la documentación",
				2 => "La letra de la cédula es inválida",
				3 => "El número de cédula es inválido",
				4 => "La moneda es inválida, valores permitidos 1 (Bs.) o 2 (USD)",
				5 => "El título es inválido",
				6 => "La referencia es inválida",
				7 => "El monto es inválido",
				8 => "Se superó la cantidad máxima de envíos de códigos",
				9 => "Pago no encontrado",
				12 => "Pago se encuentra fuera del rango de fechas validas",
				13 => "El pago se encuentra expirado",
				14 => "Instrumento de pago inválido",
				15 => "Compra Rechazada. Transacción Fallida",
				16 => "Se excedió en el número de intentos de verificación de token",
				17 => "Token de autenticación inválido",
				18 => "El teléfono es inválido",
				19 => "Código de seguridad de tarjeta de crédito inválido",
				21 => "Fecha de expiración inválida",
				22 => "Token de autenticación expirado",
				23 => "La descripción es inválida",
				24 => "Correo electrónico inválido",
				25 => "Afiliado no válido",
				26 => "No se encontró el token de autenticación",
				27 => "No se encontró el método de pago",
				29 => "Error enviando el token de autenticación",
				30 => "No se encontró el grupo de pago",
				31 => "No se encontró el método de autenticación",
				32 => "No se encontró la transacción solicitada",
			    34 => "Token caducado",
				35 => "La letra del rif es inválida",
				36 => "El número de rif es inválido",
				99 => "Ha ocurrido un error en el servidor",
				401 => "Usuario y/o clave incorrectos",
			    404 => "No se pudo conectar con el servidor BDV",
				500 => "Ha ocurrido un error en el servidor BDV"
			);

	}
	
	public function checkPayment($paymentToken) {
		
		if($_SESSION[self::ACCESS_TOKEN] == ''){
			$this->refreshToken();	
		}
		
		$response = $this->getPayment($paymentToken);		
		
		if($response->responseCode == 401){				
			$this->refreshToken();				
			$response = $this->getPayment($paymentToken);
		}
	    
		return $response;
	}
	
    public function createPayment($paymentRequest) {
		
		if($_SESSION[self::ACCESS_TOKEN] == ''){
			$this->refreshToken();	
		}

		$response = $this->postPayment($paymentRequest);
	
		if($response->responseCode == 401){		
			$this->refreshToken();				
			$response = $this->postPayment($paymentRequest);
		}
	    
		return $response;		
    }	

	private function getMessageDescription($code) {
		 return $this->messages[$code];
	}

	private function refreshToken() {
			
		$curl = curl_init();

		$params = [
			CURLOPT_URL =>  self::URL_AUTH,
			CURLOPT_USERAGENT => 'IPG',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 5,
			CURLOPT_POST => 1,
			CURLOPT_NOBODY => false,
			CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache",
				"content-type: application/x-www-form-urlencoded",
				"accept: */*",
				"accept-encoding: gzip, deflate",
			),
			CURLOPT_POSTFIELDS => "grant_type=client_credentials&client_id=".$this->user."&client_secret=".$this->pass
		];

		curl_setopt_array($curl, $params);		
		
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		
		$resp = curl_exec($curl);
		
		$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		
		if ($httpcode == 200)
		{
			$auxResp = json_decode($resp);
			$_SESSION[self::ACCESS_TOKEN] = $auxResp->access_token;
		}
    }
	 
	private function postPayment($paymentRequest){
		 $curl = curl_init();

		$headers = [
			'Content-Type: application/json',
		    'Authorization: Bearer '.$_SESSION[self::ACCESS_TOKEN],
		];		

		$data = array(
				"currency" => $paymentRequest->currency,
				"amount" => is_numeric($paymentRequest->amount) ? $paymentRequest->amount : 0,
				"reference" => $paymentRequest->reference,
				"title" => $paymentRequest->title,
				"description" => $paymentRequest->description,
				"letter" => $paymentRequest->idLetter,
				"number" => $paymentRequest->idNumber,
				"email" => $paymentRequest->email,
				"cellphone" => $paymentRequest->cellphone,
				"urlToReturn" => $paymentRequest->urlToReturn,
				"rifLetter" => $paymentRequest->rifLetter,
				"rifNumber" => $paymentRequest->rifNumber);
		
		$str_data = json_encode($data);
		
		curl_setopt_array($curl, array(
			CURLOPT_HTTPHEADER=> $headers,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => self::URL_API,
			CURLOPT_USERAGENT => 'IPG',
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => $str_data,
			CURLOPT_HTTPAUTH=> CURLAUTH_ANY,
			CURLOPT_TIMEOUT=> 5
		));

		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			
		$resp = curl_exec($curl);
		
		$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		
		$response = new IpgBdvPaymentResponse();		
	
		if ($httpcode == 200)
		{
			$auxResp = json_decode($resp); 
			$response->responseCode = $auxResp->responseCode;
			if ($auxResp->responseCode == 0)
			{
				$response->paymentId =  $auxResp->paymentId;
				$response->urlPayment =  $auxResp->urlPayment;
				$response->success = true;
			}
			else
			{
				$response->success = false;
			}
		}
		else if( $httpcode == 401 )  
		{ 
			$response->responseCode = 401;
			$response->success = false;
		} 
		else if( $httpcode == 500 )  
		{ 
			$response->responseCode = 500;
			$response->success = false;
		} 
		else
		{ 
			$response->responseCode = 404;
			$response->success = false;
		} 
		
		$response->responseMessage = $this->getMessageDescription($response->responseCode);
		
		curl_close($curl); 
				
		return $response;
	}	
	
	private function getPayment($paymentToken)
	{
		$curl = curl_init();

		$headers = [
			'Content-Type: application/json',
			  'Authorization: Bearer '.$_SESSION[self::ACCESS_TOKEN],
		];
		
		$url = self::URL_API;
		
		curl_setopt_array($curl, array(
			CURLOPT_HTTPHEADER=> $headers,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => self::URL_API.'/'.$paymentToken,
			CURLOPT_USERAGENT => 'IPG',
			CURLOPT_HTTPGET => TRUE,
			CURLOPT_HTTPAUTH=> CURLAUTH_ANY,
			CURLOPT_TIMEOUT=> 5
		));

		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		
		$response = new IpgBdvCheckPaymentResponse();
		$resp = curl_exec($curl);
		$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		if ($httpcode == 200)
		{
			$auxResp = json_decode($resp);
			
			$response->responseCode = $auxResp->responseCode;			

			if ($auxResp->responseCode == 0)
			{
				$response->status = $auxResp->status;			
				$response->success = true;				
				$response->idLetter = $auxResp->letter;
	 			$response->idNumber = $auxResp->number;
	 			$response->amount = $auxResp->amount;
	 			$response->currency = $auxResp->currency;
	 			$response->reference = $auxResp->reference ?? '';
	 			$response->title = $auxResp->title;
	 			$response->description = $auxResp->description;
				$response->transactionId = $auxResp->transactionId;
				$response->paymentMethodDescription = $auxResp->paymentMethodDescription ?? '';
				$response->paymentDate = $auxResp->createdOn;
				$response->paymentMethodNumber = $auxResp->pan ?? '';
				$response->token = $paymentToken;
				$response->authorizationCode = $auxResp->authorizationCode ?? '';
			}
			else
			{
				$response->success = false;
			}
		}
		else if( $httpcode == 401 )  
		{ 
			$response->responseCode = 401;
			$response->success = false;
		} 
		else if( $httpcode == 500 )  
		{ 
			$response->responseCode = 500;
			$response->success = false;
		} 
		else
		{ 
			$response->responseCode = 404;
			$response->success = false;
		} 
		
		$response->responseMessage = $this->getMessageDescription($response->responseCode);
		
		curl_close($curl);
				
		return $response;

		curl_close($curl); 

		return $resp;
	}
}

class IpgBdvPaymentRequest
{	
	// propiedades
	public $idLetter;
	public $idNumber;
	public $amount;
	public $currency;
	public $reference;
	public $title;
	public $description;
	public $email;
	public $cellphone;
	public $urlToReturn;
	public $rifLetter;
	public $rifNumber;
}

class IpgBdvPaymentResponse
{	
    // propiedades
	public $success;
	public $responseCode;
	public $responseMessage;
	public $paymentId;
	public $urlPayment;
}

class IpgBdvCheckPaymentResponse
{	
    // propiedades
	public $status;
	public $currency;
	public $amount;
	public $reference;
	public $title;
	public $description;
	public $idLetter;
	public $idNumber;
	public $transactionId;
	public $paymentMethodDescription;
	public $paymentDate;
	public $success;
	public $responseCode;
	public $responseMessage;
	public $paymentMethodNumber;
	public $token;
	public $authorizationCode;
}
