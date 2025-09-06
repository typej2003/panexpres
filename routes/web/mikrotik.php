<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Mikrotik\Integracion;
use App\Http\Livewire\Mikrotik\ViewIntegration;
use App\Http\Livewire\Mikrotik\ListUsersMikrotik;
use App\Http\Livewire\Mikrotik\Hotspot\ListHotspot;
use App\Http\Livewire\Mikrotik\Hotspot\CrearTicket;
use App\Http\Livewire\Mikrotik\Hotspot\CreateUser;
use App\Http\Controllers\LoginMikrotik;
use App\Http\Livewire\Mikrotik\Hotspot\ListPlanes;
use App\Http\Controllers\Api\MikrotikPasarelaController;

Route::get('/integracion', Integracion::class)->name('integracion')->middleware('auth');

Route::get('/viewintegration', ViewIntegration::class)->name('viewintegration')->middleware('auth');

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

    $datos = json_encode($datos);


    return view('externalviews.pagosatisfactorioMikrotik', ['datos' => $datos] );
});
