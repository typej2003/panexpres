<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Mikrotik\Integracion;
use App\Http\Livewire\Mikrotik\ListRouters;
use App\Http\Livewire\Mikrotik\ViewIntegration;
use App\Http\Livewire\Mikrotik\Router\ConfigureRouter;
use App\Http\Livewire\Mikrotik\Router\RouterUsers;
use App\Http\Livewire\Mikrotik\Router\RouterHotspots;
use App\Http\Livewire\Mikrotik\Router\RouterPlanes;
use App\Http\Livewire\Mikrotik\User\TimeOut;

use App\Http\Livewire\Mikrotik\ListUsersMikrotik;
use App\Http\Livewire\Mikrotik\Hotspot\ListHotspot;
use App\Http\Livewire\Mikrotik\Hotspot\CrearTicket;
use App\Http\Livewire\Mikrotik\Hotspot\CreateUser;
use App\Http\Controllers\LoginMikrotik;
use App\Http\Livewire\Mikrotik\Hotspot\ListPlanes;
use App\Http\Controllers\Api\MikrotikPasarelaController;

use Illuminate\Support\Facades\Response;

Route::get('/integracion', Integracion::class)->name('integracion')->middleware('auth');

Route::get('/listRouters', ListRouters::class)->name('listRouters')->middleware('auth');

Route::get('/viewintegration', ViewIntegration::class)->name('viewintegration')->middleware('auth');

Route::get('/configureRouter/{router_id}', ConfigureRouter::class)->name('configureRouter')->middleware('auth');

Route::get('/routerUsers/{router_id}', RouterUsers::class)->name('routerUsers')->middleware('auth');

Route::get('/routerHotspots/{router_id}', RouterHotspots::class)->name('routerHotspots')->middleware('auth');

Route::get('/routerPlanes/{router_id}', RouterPlanes::class)->name('routerPlanes')->middleware('auth');

Route::get('/usersMikrotik', ListUsersMikrotik::class)->name('usersMikrotik')->middleware('auth');

Route::get('/ListHotspot', ListHotspot::class)->name('ListHotspot')->middleware('auth');

Route::get('/loginMikrotik', [LoginMikrotik::class, 'loginMikrotik'])->name('loginMikrotik')->middleware('auth');

Route::get('/crearTicket', CrearTicket::class)->name('crearTicket')->middleware('auth');

Route::get('/createUser', CreateUser::class)->name('createUser')->middleware('auth');

Route::get('/listPlanesHotspot', ListPlanes::class)->name('listPlanesHotspot')->middleware('auth');

Route::get('/timeOut', TimeOut::class)->name('timeOut')->middleware('auth');

// Operaciones para la pasarela del mikrotik
Route::get('/pagosatisfactorioMikrotik/{id}', function ( $id ) {
    $newUser = [];
    $newUser = '';
    $id_suc = $id;
    //$pasarela = Pasarela();
    $result = new MikrotikPasarelaController();
    $newUser = $result->registrarReferenciaMikrotik($id);

    //return view('externalviews.ver', ['newUser' => $newUser, ] );
    
    if ($newUser['status']== true)
    {
        return view('externalviews.pagosatisfactorioMikrotik', ['user' => $newUser['user'], 'password'  =>  $newUser['password']] );
    }else{
        return view('externalviews.pagosatisfactorioMikrotik', ['user' => 'fallo', 'password'  =>  'fallo'] );
    }
        
    
});

Route::get('/pruebapagosatisfactorioMikrotik', function () {
    
    $user = '04165800403';

    $password = '52479051';

    $host = 'typej.ddns.net';



    $datos = true;

    return view('externalviews.ver', ['user' => $user, 'password'  =>  $password, 'newUser'  =>  $newUser] );
});

Route::get('/google', function() {
    return redirect()->away('https://www.google.com');
});

Route::get('/enviarLoginNo', function() {
    $host = 'typej.ddns.net';
    $user = '04165800403';
    $pass = '52479051';
    $url = 'http://'.$host .'/login?username='. $user . '&password='.$pass;
    return redirect()->away($url);
});

Route::get('/enviarValores', function () {

    $host = 'typej.ddns.net';
    $user = '04165800403';
    $pass = '52479051';

    return Response::stream(
        function () {
            while (true) {
                echo "data: " . json_encode(['message' => 'Evento recibido: ' . date('Y-m-d H:i:s')]) . "\n\n";
                flush(); // Asegura que los datos se envíen inmediatamente
                sleep(5); // Espera 5 segundos antes de enviar el siguiente evento
            }
        },
        200,
        [
            'Content-Type' => 'text/event-stream',
            'Cache-Control' => 'no-cache',
            'X-Accel-Buffering' => 'no', // Para servidores como Nginx
        ]
    );
});