<?php

use Illuminate\Support\Facades\Route;


use App\Http\Livewire\Transaccion\ListTransacciones;

use App\Http\Livewire\Transaccion\ListPagoZelle;

Route::get('/listTransacciones/{comercioId}', ListTransacciones::class)->name('listTransacciones')->middleware('auth');

Route::get('/listPagoZelle', ListPagoZelle::class)->name('listPagoZelle')->middleware('auth');