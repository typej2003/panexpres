<?php

namespace App\Http\Livewire\Mikrotik\Router;

use App\Http\Controllers\Controller;
use RouterOS\Client;
use RouterOS\Query;
use Illuminate\Http\Request;
use App\Models\Router;

class HotspotUsers extends Controller
{
    public $router;

    public function mount($router_id=1)
    {
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

            dd($profiles);
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
}