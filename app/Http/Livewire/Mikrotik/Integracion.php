<?php

namespace App\Http\Livewire\Mikrotik;

use Livewire\Component;

use RouterOS\Client;
use RouterOS\Query;

use App\Models\User;

class Integracion extends Component
{
    public $usuarios;
    public $response = null;
    public $identity = null;

    public function integracion($host='typej.ddns.net', $user = 'admin', $pass= 'admin123')
    {
        try {
            //prueba 1
            $dominio = 'typej.ddns.net';
            $host = gethostbyname($dominio);

            //$host = '192.168.2.1';
            $host = 'typej.ddns.net';
            $user = 'admin';
            $pass = 'admin123';

            // Iniciar la conexión
            $client = new Client([
                'host' => $host,
                'user' => $user,
                'pass' => $pass,
                // 'port' => 8729,
            ]);
            
            $query = new Query('/system/identity/getall');

            $identity = $client->query($query)->read();

            $this->identity = $identity[0]['name'];

            $query = new Query('/system/resource/print');

            $response = $client->query($query)->read();
            // La variable $response contendrá un array con la información de los usuarios

            $claves = array_keys($response[0]);

            //dd($response[0]);
            $texto = '';

            foreach ($response[0] as $key => $elemento) {
                $texto .= $key .': '. $elemento . '<br>'; //PHP_EOL;
            }

            $this->response = $texto;

        } catch (\Throwable $th) {
            //throw $th;
            dd('error: ' . $th);
        }        

    }

    public function mount()
    {
        

    }

    public function render()
    {
        $dominio = 'typej.ddns.net';
        $ip_del_dominio = gethostbyname($dominio);

        return view('livewire.mikrotik.integracion', [
            'ip_del_dominio'  => $ip_del_dominio,
        ]);
    }
}
