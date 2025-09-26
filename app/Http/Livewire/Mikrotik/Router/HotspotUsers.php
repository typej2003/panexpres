<?php

namespace App\Http\Livewire\Mikrotik\Router;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RouterOS\Client;
use RouterOS\Query;
use Illuminate\Http\Request;
use App\Models\Router;

class HotspotUsers extends Component
{
    public $router;
    public $showEditModal = false;
    public $nameserverUH;
    
    public $state = [];
    public $namesInterfaces = [];
    public $namesProfiles = [];
    public $namesProfilesUser = [];
    public $usersHotspot = [];
    public $nameshotspots = [];
    public $namesUsershotspots = [];
    public $users;

    public $name = 'all';

    public function mount($nrorouter = 'R001', $name = "all")
    {        
        $this->router = Router::where('nrorouter', $nrorouter)->first();
        $this->name = $name;
    }

    public function exeQuery($datos, $query)
    {
        try {
                $client = new Client($datos);

                $query = new Query($query);

                $result = $client->query($query)->read();

            } catch (Exception $e) {
                $result = "Caught exception: " . $e->getMessage() . "\n";
                return response()->json([
                    'success' => false,
                    'message' => $result,
                ]);
            } 
        return $result;
    }

    public function getHotspotUsers()
    {
        try {
            
            $router_id=1;

            $this->router = Router::find($router_id);

            if(config('app.host') == 'ip'){
                $host = $this->router->ip;
            }else{
                $host = $this->router->dns;
            }        
            $datos = [
                'host' => $this->router->ip,
                'user' => $this->router->admin,
                'pass' => $this->router->password,
            ];

            $client = new Client($datos);

            $query = new Query('/ip/hotspot/user/print');
            $query = $query->where('name', '04165800403');
            $users = $client->query($query)->read();
            dd($users[0]);
            $profile = $users[0]['profile'];

            $query = new Query('/ip/hotspot/user/profile/print');
            $query = $query->where('name', $profile);
            $profiles = $client->query($query)->read();

            $hotspotUsers = [];
            foreach ($response as $user) {
                $uptime = $user['uptime'];
                
                // Si el perfil de usuario tiene un 'session-timeout' definido,
                // puedes obtenerlo y calcular el tiempo restante.
                // Aquí solo mostramos el 'uptime' para simplicidad.
                
                $hotspotUsers[] = [
                    'user' => $user['user'],
                    'uptime' => $uptime,
                    'address' => $user['address'],
                    'session_time_left' => isset($user['session-time-left']) ? $user['session-time-left'] : 'N/A'
                ];
            }

            return view('livewire.router.hotspot-users', ['users' => $hotspotUsers]);

        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => 'Error al conectar con MikroTik: ' . $e->getMessage()], 500);
        }
    }

    public function addNewUserHotspot($nameUser)
	{   
        $router = $this->router; 
        
        $namesInterfaces = $this->namesInterfaces; 
        $namesProfiles = $this->namesProfiles;
        $namesProfilesUser = $this->namesProfilesUser;
        $nameshotspots = $this->nameshotspots;
        $users = $this->users;
        $name = $this->name;
		$this->reset();
        
        $this->router = $router; 
        $this->namesInterfaces = $namesInterfaces; 
        $this->namesProfiles = $namesProfiles;
        $this->namesProfilesUser = $namesProfilesUser;
        $this->nameshotspots = $nameshotspots;
        $this->users = $users;
        $this->name = $name;

		$this->showEditModal = false;
        
        $this->state['nameUH'] = $nameUser;
        $this->state['serverUH'] = $this->name;

        
        $this->dispatchBrowserEvent('show-formUserHotspot', ['hotspots' => $this->nameshotspots, 'namesProfilesUser' => $this->namesProfilesUser, 'nameserverUH' => $this->name ]);

	}
    
    public function createUserHotspot()
    {
        try {
                $messages = [
                    'required' => 'El campo :attribute es requerido.',
                    'name.max' => 'The name cannot exceed 255 characters.',
                ];

                $validatedData = Validator::make($this->state, [
                    'serverUH' => 'required',
                    'nameUH' => 'required',
                    'password' => 'required',
                    'address' => 'nullable',
                    'macaddress' => 'nullable',
                    'profileUH' => 'required|not_in:0',
                    'routes' => 'nullable',
                    'email' => 'nullable',                    
                ], $messages)->validate();

                if(config('app.host') == 'ip'){
                    $host = $this->router->ip;
                }else{
                    $host = $this->router->dns;
                    //$host = 'typej.ddns.net';
                    $host = '192.168.1.6';
                }        
                
                // Iniciar la conexión
                $client = new Client([
                    'host' => $host,
                    'user' => $this->router->admin,
                    'pass' => $this->router->password,
                    'port' => 8728,
                ]);

                // Crear la consulta para añadir el usuario
                $query = (new Query('/ip/hotspot/user/add'))
                    ->equal('server', $validatedData['serverUH'])
                    ->equal('name', $validatedData['nameUH'])
                    ->equal('password', $validatedData['password'])
                    ->equal('profile', $validatedData['profileUH']);
                
                // Ejecutar la consulta
                $result = $client->query($query)->read();
                // Tarea completada.
                if($result['after']['message'] == 'failure: already have user with this name for this server')
                {
                    // Buscar el usuario
                    $query = (new Query('/ip/hotspot/user/print'))
                        ->where('name', $validatedData['nameUH']);
                    
                    // // Ejecutar la consulta
                    $user = $client->query($query)->read();
                    //dd($user[0]['.id']);
                    $id = $user[0]['.id'];
                    // Modificar datos

                    // Define el comando con los parámetros
                    $query = (new Query('/ip/hotspot/user/set'))
                        ->equal('.id', $id) // O 'name' => 'nombre_usuario'
                        ->equal('profile', $validatedData['profileUH']);

                    // Ejecuta el comando
                    $response = $client->query($query)->read();
                    dd($result);
                }

                $this->dispatchBrowserEvent('hide-formUserHotspot', ['message' => 'Usuario del Hotspot agregado satisfactoriamente!']);
            } catch (Exception $e) {
                $this->dispatchBrowserEvent('hide-formUserHotspot', ["Caught exception: " . $e->getMessage() . "\n"]);
                
            } 

		//$validatedData['password'] = bcrypt($validatedData['password']);
    }

    public function render()
    {
        try {
            if(config('app.host') == 'ip'){
                $host = $this->router->ip;
            }else{
                $host = $this->router->dns;
                //$host = 'typej.ddns.net';
                $host = '192.168.1.6';
            }        
            
            // Iniciar la conexión
            $datos = [
                'host' => $host,
                'user' => $this->router->admin,
                'pass' => $this->router->password,
                'port' => 8728,
            ];
            
            $client = new Client($datos);

            // demas datos de modal
            // todas las interfaces
            $interfaces = $this->exeQuery($datos, '/interface/print');
            $this->namesInterfaces = [];
            foreach ($interfaces as $elemento) {
                $this->namesInterfaces[] = $elemento['name'];
            }

            //todas los perfiles de hotspot
            $profiles = $this->exeQuery($datos, '/ip/hotspot/profile/print');
            $this->namesProfiles = [];
            foreach ($profiles as $elemento) {
                $this->namesProfiles[] = $elemento['name'];
            }

            //todos los usuarios de los hotspot
            $users = $this->exeQuery($datos, '/ip/hotspot/user/print');

            $this->namesUsershotspots = $users;

            //dd($this->cantUsershotspots('hotspot1'));
            //dd($this->cantUserstrial());        
            //dd($users);

            //todos los hotspot
            $hotspots = $this->exeQuery($datos, '/ip/hotspot/print');
            $this->nameshotspots = [];
            foreach ($hotspots as $elemento) {
                $this->nameshotspots[] = $elemento['name'];
            }

            //todos los perfiles usuarios de los hotspot
            $profilesUser = $this->exeQuery($datos, '/ip/hotspot/user/profile/print');
            $this->namesProfilesUser = [];
            foreach ($profilesUser as $elemento) {
                $this->namesProfilesUser[] = $elemento['name'];
            }

            $query = new Query('/ip/hotspot/user/print');

            if($this->name !== 'all')
            {
                $query = $query->where('server', $this->name);
            }


            $this->users = $client->query($query)->read();

            return view('livewire.mikrotik.router.hotspot-users');

        } catch (\Throwable $th) {
            return view('livewire.mikrotik.extra.error-view', ['error' => $th ]);
        }
        
    }
}