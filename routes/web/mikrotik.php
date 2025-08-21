<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Mikrotik\Integracion;
use App\Http\Livewire\Mikrotik\ListUsersMikrotik;
use App\Http\Livewire\Mikrotik\Hotspot\ListHotspot;
use App\Http\Controllers\LoginMikrotik;

Route::get('/integracion', Integracion::class)->name('integracion')->middleware('auth');

Route::get('/usersMikrotik', ListUsersMikrotik::class)->name('usersMikrotik')->middleware('auth');

Route::get('/ListHotspot', ListHotspot::class)->name('ListHotspot')->middleware('auth');


Route::get('/loginMikrotik', [LoginMikrotik::class, 'loginMikrotik'])->name('loginMikrotik');