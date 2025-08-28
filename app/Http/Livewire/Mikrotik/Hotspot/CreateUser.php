<?php

namespace App\Http\Livewire\Mikrotik\Hotspot;

use Livewire\Component;

use RouterOS\Client;
use RouterOS\Query;

class CreateUser extends Component
{
    public $datos = [
            'host' => '192.168.2.1',
            'user' => 'admin',
            'pass' => 'admin123'
        ];
        
    public function index()
    {
        //
        $data = ['valor' => "Operacion exitosa a traves de api! con index", ];
        return response()->json($data);
    }
    
    public function addNew()
	{
        //esto es un ejemplo
        
        
        $username = 'usuarioPrueba';
        $password = '12345';
        $profile = 'default';

        $datos = [
                'host' => '192.168.2.1',
                'user' => 'admin',
                'pass' => 'admin123'
            ];

        // $client = new Client($datos);

        // // Crear la consulta para añadir el usuario
        // $query = (new Query('/ip/hotspot/user/add'))
        //     ->equal('server', 'all')
        //     ->equal('name', $username)
        //     ->equal('password', $password)
        //     ->equal('profile', $profile);
        
        // // Ejecutar la consulta
        // $client->query($query)->read();
        // // Tarea completada.
            
        $data = ['valor' => "Operacion exitosa a traves de api! con addNew true", ];
        return response()->json($data);
        

	}

    public function crearUsuarioHotspot($username, $password, $profile = 'default')
    {
        try {

            $data = ['valor' => "Operacion exitosa a traves de api! con addNew crearUsuarioHotspot", ];
            return response()->json($data);
            
            $datos = [
                'host' => '192.168.2.1',
                'user' => 'admin',
                'pass' => 'admin123'
            ];

            $client = new Client($datos);

            // Crear la consulta para añadir el usuario
            $query = (new Query('/ip/hotspot/user/add'))
                ->equal('server', 'all')
                ->equal('name', $username)
                ->equal('password', $password)
                ->equal('profile', $profile);
            
            // Ejecutar la consulta
            $client->query($query)->read();
            // Tarea completada.

            return true;
        } catch (Exception $e) {
            return false;
            
        } 
    }



    // Función para autenticar al usuario y darle acceso
    public function iniciarSesionHotspot($username, $password)
    {
        // Conexión al dispositivo MikroTik
        $conexion = [
            'host' => '192.168.2.1',
            'user' => 'admin',
            'pass' => 'admin123'
        ];
        $client = new Client($conexion);

        // Crear la consulta para iniciar sesión
        $query = (new Query('/login'))
            ->equal('name', $username)
            ->equal('password', $password);

        try {
            // Ejecutar la consulta de login
            $response = $client->query($query)->read();
            // Verificar la respuesta para confirmar el éxito
            if (!empty($response) && isset($response['!trap'])) {
                $msj = 'Error de autenticación: ' . $response['!trap'][0]['message'];
                return response()->json([
                    'message' => $msj,
                    'status' => true,
                ], 200);
                
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function render()
    {
        return view('livewire.mikrotik.hotspot.create-user');
    }
}
