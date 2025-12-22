<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Distribucion\ListPedidosDistribucion;

Route::get('/listPedidosDistribucion', ListPedidosDistribucion::class)->name('listPedidosDistribucion')->middleware('auth');