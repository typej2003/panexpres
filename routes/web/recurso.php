<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Recursos\LectorQr;

Route::get('/lectorQr', LectorQr::class)->name('lectorQr')->middleware('auth');