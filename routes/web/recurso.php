<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Recursos\LectorQr;
use App\Http\Livewire\Recursos\Redireccionar;
use App\Http\Livewire\Notificacion\EmailController;

use App\Models\User;
use App\Models\Pedido;

//Route::get('/lectorQr', LectorQr::class)->name('lectorQr')->middleware('auth');

//Route::get('/lectorQr', LectorQr::class)->name('lectorQr');
Route::get('/lectorQr', function(){
    // return view('externalviews.lectorQr')->middleware('auth');
    return view('externalviews.lectorQr');
});

Route::get('/redireccionar/{opcion}', Redireccionar::class)->name('redireccionar')->middleware('auth');

Route::get('/probarEmailCompra', function() {

    $user = User::where('name', 'cliente')->first();
    
    $pedido = Pedido::where('id', 1)->first();

    $emailwelcome = new EmailController();

    $emailwelcome->sendEmail('compra', $user, $pedido->nropedido );

})->name('probarEmailCompra')->middleware('auth');