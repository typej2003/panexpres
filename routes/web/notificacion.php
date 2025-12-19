<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Pedido;

// Notificaciones

use App\Http\Livewire\Notificacion\EmailExample;
use App\Http\Livewire\Notificacion\EmailFile;
use App\Http\Livewire\Notificacion\EmailController;

use App\Http\Controllers\SmsTwilioController;

use App\Http\Livewire\Notificacion\ListNotificaciones;
use App\Http\Livewire\Notificacion\EmailManager;

Route::get('/emailmanager', EmailManager::class)->name('emailmanager');

Route::get('/sendemail/{index}', EmailController::class)->name('sendemail');

Route::get('/emailexample', EmailExample::class)->name('emailexample');

Route::get('/emailFiles', EmailFile::class)->name('emailFiles');

Route::get('sms/send', [SmsTwilioController::class, 'sendSms']);

Route::get('/listNotificaciones/{comercioId}', ListNotificaciones::class)->name('listNotificaciones')->middleware('auth');

Route::post('saveNotificacion', [ListNotificaciones::class, 'saveNotificacion'])->middleware('auth');

Route::get('/probarEmailCompra', function() {

    $user = User::where('email', 'typej2003@gmail.com')->first();

    $pedido = Pedido::where('id', 1)->first();

    $emailwelcome = new EmailController();

    $emailwelcome->sendEmail('compra', $user, $pedido->nropedido );

    return redirect()->back();

})->name('probarEmailCompra')->middleware('auth');

Route::get('/probarEmailAdmin', function() {

    $user = User::where('email', 'typej2003@gmail.com')->first();

    $info = 'Mensaje del Administrador';

    $email = new EmailController();

    $email->sendEmailAdmin('info', $user, $info );

    return redirect()->back();

})->name('probarEmailAdmin')->middleware('auth');