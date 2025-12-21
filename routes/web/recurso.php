<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Recursos\LectorQr;
use App\Http\Livewire\Recursos\Redireccionar;

use App\Http\Livewire\Components\Carousel;

use App\Http\Livewire\Components\Promociones;

use App\Models\User;
use App\Models\Pedido;

//Route::get('/lectorQr', LectorQr::class)->name('lectorQr')->middleware('auth');

//Route::get('/lectorQr', LectorQr::class)->name('lectorQr');
Route::get('/lectorQr', function(){
    // return view('externalviews.lectorQr')->middleware('auth');
    return view('externalviews.lectorQr');
});

Route::get('/redireccionar/{opcion}', Redireccionar::class)->name('redireccionar')->middleware('auth');

Route::get('/carousel', Carousel::class)->name('carousel')->middleware('auth');

Route::get('/promociones', Promociones::class)->name('promociones')->middleware('auth');

