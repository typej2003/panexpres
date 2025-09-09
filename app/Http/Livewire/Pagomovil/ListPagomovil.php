<?php

namespace App\Http\Livewire\Pagomovil;

use Illuminate\Http\Request;
use App\Http\Livewire\Admin\AdminComponent;
use App\Http\Livewire\Notificacion\SmsSender;
use App\Models\Pagomovil;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use RouterOS\Client;
use RouterOS\Query;


class ListPagomovil extends AdminComponent
{

	public $state = [];

	public $pago;

	public $showEditModal = false;

	public $pagoIdBeingRemoved = null;

	public $searchTerm = null;

    protected $queryString = ['searchTerm' => ['except' => '']];

	public $sortColumnName = 'created_at';

    public $sortDirection = 'desc';

	 public $datos = [
             'host' => '192.168.1.6',
             'user' => 'jose',
             'pass' => '123'
         ];
    // public $host = 'typej.ddns.net';
    // public $datos = [
    //         'host' => 'typej.ddns.net',
    //         'user' => 'jose',
    //         'pass' => '123'
    //     ];

	public function exeQuery($datos, $query)
    {
        try {
                $client = new Client($datos);

                $query = new Query($query);

                $result = $client->query($query)->read();

            } catch (Exception $e) {
                $result = "Caught exception: " . $e->getMessage() . "\n";
            } 
        return $result;
    }

	public function changeStatus(Pagomovil $pago, $status)
	{
		Validator::make(['status' => $status], [
			'status' => [
				'required',
				Rule::in(Pagomovil::CONFIRMADO, Pagomovil::NOCONFIRMADO, Pagomovil::RECHAZADO),
			],
		])->validate();

		$pago->update(['status' => $status]);

		$this->dispatchBrowserEvent('updated', ['message' => "El Estado cambió a {$status} satisfactoriamente."]);
	}

	public function activarUsuario(Pagomovil $pago)
	{
        //revisar si existe user
		if($pago->user){
			//se debe recargar el tiempo al usuario
			dd('existe usuario');
		}
		else{
			// crear usuario y mandar datos al cliente
			$p = json_decode($pago->plan);
			// crear un user
			$user = $pago->telefono;

			$this->createUserHotspot($user, $p->plan.'/'.$p->costo);

			//actualizar el usuario en el pago
			$pago->update(['user' => $user]);

		}

	}

	public function createUserHotspot($user, $profile)
    {
        try {

                $client = new Client($this->datos);

                $password = $this->randomPassword();

                // Crear la consulta para añadir el usuario
                $query = (new Query('/ip/hotspot/user/add'))
                    ->equal('server', 'all')
                    ->equal('name', $user)
                    ->equal('password', $password)
                    ->equal('profile', $profile);
                
                // Ejecutar la consulta
                $client->query($query)->read();
                // Tarea completada.

                //Enviar sms con el user y la contraseña
                $this->sendSms($user, $password);

                $this->dispatchBrowserEvent('hide-formUserHotspot', ['message' => 'Usuario del Hotspot agregado satisfactoriamente!']);

            } catch (Exception $e) {

                $this->dispatchBrowserEvent('hide-formUserHotspot', ["Caught exception: " . $e->getMessage() . "\n"]);
                
            } 

		//$validatedData['password'] = bcrypt($validatedData['password']);
    }

    public function sendSms($user, $password)
    {
        $message = 'Su cuenta se encuentra activa. Usuario: ' . $user . ' Clave: ' . $password;
        $sender = new SmsSender;
        $sender->callSendSms($user, $message);

    }

	/**
     * Genera una contraseña de 8 dígitos con un dígito y un carácter especial.
     */
    private function generatePassword()
    {
        $chars = '!@#$%^&*()_+-=[]{}|;:,.<>?';
        $specialChar = $chars[rand(0, strlen($chars) - 1)];

        // Genera 7 caracteres aleatorios
        $randomChars = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 7);

        // Inserta un dígito en una posición aleatoria
        $position = rand(0, 7);
        $password = substr_replace($randomChars, rand(0, 9), $position, 0);

        // Inserta el carácter especial en una posición aleatoria
        $position = rand(0, 8);
        $password = substr_replace($password, $specialChar, $position, 0);

        return $password;
    }

	private function randomPassword() {
		// $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$alphabet = '1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}

	public function addNew()
	{
		$this->reset();

		$this->showEditModal = false;

		$this->dispatchBrowserEvent('show-form');
	}

	public function createPago()
	{
		$validatedData = Validator::make($this->state, [
			'referencia' => 'required',
            'telefono' => 'required',
            'banco' => 'required',
            'monto' => 'required',
            'status' => 'required',
            'fecha_pago' => 'required',
		])->validate();

		Pagomovil::create($validatedData);

		// session()->flash('message', 'User added successfully!');

		$this->dispatchBrowserEvent('hide-form', ['message' => 'Pago móvil agregado satisfactoriamente!']);
	}

	public function enviarSms(Pagomovil $pago)
    {
        $message = 'Su solicitud esta siendo validada';
        $sender = new SmsSender;
        $sender->callSendSms($pago->telefono, $message);
    }

	public function confirmPagoRemoval($pagoId)
	{
		$this->pagoIdBeingRemoved = $pagoId;

		$this->dispatchBrowserEvent('show-delete-modal');
	}

	public function deletePago()
	{
		$pago = Pagomovil::findOrFail($this->pagoIdBeingRemoved);

		$pago->delete();

		$this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Pago móvil eliminado satisfactoriamente!']);
	}

    public function capturarPagomovil(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'referencia' => 'required',
            'banco' => 'required|not_in:0',
            'codigo' => 'required|not_in:0',
            'telefono' => 'required',
            'monto' => 'required',
			'user' => 'nullable',
			'plan' => 'required',
            'fecha_pago' => 'required',
        ]);
		
        $data = [
            'referencia' => $request->post('referencia'), 
            'banco' => $request->post('banco'), 
            'codigo' => $request->post('codigo'), 
            'telefono' => $request->post('telefono'), 
            'monto' => $request->post('monto'), 
            'status' => 'noconfirmado', 
			'user' => $request->post('user'), 
			'plan' => $request->post('plan'),
            'fecha_pago' => $request->post('fecha_pago'),
            'externalcomment' => '',
        ];
            
        if ($validator->fails()) {
            return response()->json([
                'data' => $data,
                'responseMessage' => 'Operación fallida',
				'success' => false
            ]); // 422
        }
        
        $success = true;

        $pago = Pagomovil::create($data);

        return response()->json([
                'data' => $data,
                'responseMessage' => 'Operación exitosa',
				'success' => $success
            ], 200);
    }

    public function sortBy($columnName)
    {
        if ($this->sortColumnName === $columnName) {
            $this->sortDirection = $this->swapSortDirection();
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortColumnName = $columnName;
    }

    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function updatedSearchTerm()
    {
        $this->resetPage();
    }

    public function render()
    {

    	$pagomoviles = Pagomovil::query()
    		->where('referencia', 'like', '%'.$this->searchTerm.'%')
    		->orWhere('telefono', 'like', '%'.$this->searchTerm.'%')
            ->orderBy($this->sortColumnName, $this->sortDirection)
            ->paginate(15);

        return view('livewire.pagomovil.list-pagomovil', [
        	'pagomoviles' => $pagomoviles,
        ]);
    }

	
}
