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
        $data = ['valor' => "Operacion exitosa a traves de api! con addNew", ];
        return response()->json($data);
        
        $username = 'usuarioPrueba';
        $password = '12345';

		$this->crearUsuarioHotspot($username, $password, $profile = 'default');

        //$response = $this->iniciarSesionHotspot($username, $password);

        $data = ['valor' => "Operacion exitosa, usuario creado!"];
        return response()->json($data);

        


	}

    public function crearUsuarioHotspot($username, $password, $profile = 'default')
    {
        // Conexión al dispositivo MikroTik
        $client = new Client($this->datos);

        // Crear la consulta para añadir el usuario
        $query = (new Query('/ip/hotspot/user/add'))
            ->equal('name', $username)
            ->equal('password', $password)
            ->equal('profile', $profile); // Asigna un perfil, 'default' por defecto
        // Ejecutar la consulta
        $client->query($query)->read();
        return true;
    }



    // Función para autenticar al usuario y darle acceso
    public function iniciarSesionHotspot($username, $password)
    {
        // Conexión al dispositivo MikroTik
        $client = new Client($this->datos);

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
            return "Inicio de sesión exitoso para {$username}.";
        } catch (\Exception $e) {
            $msj =  'Error al conectar con MikroTik: ' . $e->getMessage();
            return response()->json([
                    'message' => $msj,
                    'status' => false,
                ], 401);
        }
    }

    public function render()
    {
        return view('livewire.mikrotik.hotspot.create-user');
    }
}
