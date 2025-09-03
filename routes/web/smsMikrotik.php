<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Notificacion\SmsSender;

Route::get('/smsSender', SmsSender::class)->name('smsSender');