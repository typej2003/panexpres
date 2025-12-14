<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pasarela\Pasarela;
use App\Http\Livewire\Pasarela\BioPago;
use App\Http\Livewire\Pasarela\BioPagoUrl;

Route::get('/pasarela', Pasarela::class)->name('pasarela');

Route::get('/biopago', BioPago::class)->name('biopago');

Route::get('/biopagourl', BioPagoUrl::class)->name('biopagourl');