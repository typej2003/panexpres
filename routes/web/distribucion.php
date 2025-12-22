<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Distribucion\ListPedidosDistribucion;

use App\Http\Livewire\Distribucion\ListUsuariosDistribucion;

Route::get('/listPedidosDistribucion', ListPedidosDistribucion::class)->name('listPedidosDistribucion')->middleware('auth');

Route::get('/listUsuariosDistribucion', ListUsuariosDistribucion::class)->name('listUsuariosDistribucion')->middleware('auth');
