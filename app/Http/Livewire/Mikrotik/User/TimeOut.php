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

    public function mount($nrorouter="R001")
    {   
        $this->router = Router::where('nrorouter', $nrorouter)->first();
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

    public function procesar()
    {
        try {
            //todos los perfiles usuarios de los hotspot

            if(config('app.host') == 'ip'){
                $host = $this->router->ip;
            }else{
                $host = $this->router->dns;
                //$host = 'typej.ddns.net';
                //$host = '192.168.1.6';
            }        
            
            // Iniciar la conexión
            $client = new Client([
                'host' => $host,
                'user' => $this->router->admin,
                'pass' => $this->router->password,
                'port' => 8728,
            ]);

            //$profilesUser = $this->exeQuery($datos, '/ip/hotspot/user/profile/print');

            $nameProfile = '1 minuto/10';
            
            $query = (new Query('/ip/hotspot/user/profile/print'))
            ->where('name', $nameProfile);        
            $result = $client->query($query)->read();
            
            //dd($result[0]['session-timeout']);

            //$usersHotspot = $this->exeQuery($datos, '/ip/hotspot/user/print');        
            $nameProfile = '04165800403';
            
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
            dd($result);
        } 
    }

    public function render()
    {
        $dominio = 'typej.ddns.net';
        $ip_del_dominio = gethostbyname($dominio);

        return view('livewire.mikrotik.user.time-out', [
            'dominio'  => $dominio,
            'ip_del_dominio'  => $ip_del_dominio,
        ]);

        
    }
}
