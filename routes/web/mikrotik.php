<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Mikrotik\Integracion;
use App\Http\Livewire\Mikrotik\ListRouters;
use App\Http\Livewire\Mikrotik\ViewIntegration;
use App\Http\Livewire\Mikrotik\Router\ConfigureRouter;
use App\Http\Livewire\Mikrotik\Router\RouterUsers;
use App\Http\Livewire\Mikrotik\Router\RouterHotspots;
use App\Http\Livewire\Mikrotik\Router\RouterPlanes;

use App\Http\Livewire\Mikrotik\ListUsersMikrotik;
use App\Http\Livewire\Mikrotik\Hotspot\ListHotspot;
use App\Http\Livewire\Mikrotik\Hotspot\CrearTicket;
use App\Http\Livewire\Mikrotik\Hotspot\CreateUser;
use App\Http\Controllers\LoginMikrotik;
use App\Http\Livewire\Mikrotik\Hotspot\ListPlanes;
use App\Http\Controllers\Api\MikrotikPasarelaController;

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

// Operaciones para la pasarela del mikrotik
Route::get('/pagosatisfactorioMikrotik/{id}', function ( $id ) {
    $id_suc = $id;
    //$pasarela = Pasarela();
    $result = new MikrotikPasarelaController();
    $datos = $result->registrarReferenciaMikrotik($id);
        
    //$transaccion = Transaccion::where('paymentId', $id_suc)->first();

    //$datos = json_encode($datos);

    $host = 'typej.ddns.net';
    $user = 'jose';
    $pass = '123';
    $url = 'http://'.$host .'/login?dst=...&username='. $user . '&password='.$pass;

    return view('externalviews.pagosatisfactorioMikrotik', ['datos' => $datos, 'url'  =>  $url] );
});
