<?php

namespace App\Http\Livewire\Mikrotik\User;

use Livewire\Component;
use App\Models\Router;

use RouterOS\Client;
use RouterOS\Query;

class TimeOut extends Component
{
    public $router;

    public $state = [];

    public $showEditModal = false;

    public $namesProfilesUser = [];

    public $addressPool = [];

    public function mount($router_id=1)
    {   
             
        $this->router = Router::find($router_id);

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

    public function render()
    {
        //todos los perfiles usuarios de los hotspot

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

        $profilesUser = $this->exeQuery($datos, '/ip/hotspot/user/profile/print');
        $this->namesProfilesUser = [];
        foreach ($profilesUser as $elemento) {
            $this->namesProfilesUser[] = $elemento['name'];
        }

        //todos los perfiles usuarios de los hotspot
        $address = $this->exeQuery($datos, '/ip/pool/print');
        $this->addressPool = [];
        foreach ($address as $elemento) {
            $this->addressPool[] = $elemento['name'];
        }

        return view('livewire.mikrotik.user.time-out', ['profilesUser' => $profilesUser]);
    }
}
