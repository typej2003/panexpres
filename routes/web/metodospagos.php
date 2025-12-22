<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pasarela\Pasarela;
use App\Http\Livewire\Pasarela\BioPago;
use App\Http\Livewire\Pasarela\BioPagoUrl;

use App\Http\Livewire\Notificacion\CompraRealizada;

Route::get('/pasarela', Pasarela::class)->name('pasarela');

Route::get('/biopago', BioPago::class)->name('biopago');

Route::get('/biopagourl', BioPagoUrl::class)->name('biopagourl');

// Route::get('/comprarealizada', CompraRealizada::class)->name('comprarealizada');

Route::get('/comprarealizada/{nropedido}', CompraRealizada::class)->name('comprarealizada');