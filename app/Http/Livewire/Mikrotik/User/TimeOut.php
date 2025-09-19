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

    public $user = '04165800403';

    public $password = '60048209';

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
        try {
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

            //$profilesUser = $this->exeQuery($datos, '/ip/hotspot/user/profile/print');

            $nameProfile = '1 minuto/10';

            dd('ok');
            $client = new Client($datos);
            $query = (new Query('/ip/hotspot/user/profile/print'))
            ->where('name', $nameProfile);        
            $result = $client->query($query)->read();
            
            //dd($result[0]['session-timeout']);

            //$usersHotspot = $this->exeQuery($datos, '/ip/hotspot/user/print');        
            $nameProfile = '04165800403';
            $client = new Client($datos);
            $query = (new Query('/ip/hotspot/user/print'))
            ->where('name', $nameProfile);        
            $result1 = $client->query($query)->read();

            dd($result1[0]['uptime']);
            
            return view('livewire.mikrotik.user.time-out', ['profilesUser' => $profilesUser, 'profilesUser' => $usersHotspot]);
        } catch (Exception $e) {
            $result = "Caught exception: " . $e->getMessage() . "\n";
            return response()->json([
                'success' => false,
                'message' => $result,
            ]);
            return view('livewire.mikrotik.ViewIntegration');
        } 
    }
}
