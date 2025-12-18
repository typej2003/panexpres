<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Aliado\AlliedUserCreationWizard;

Route::get('/allieduserWizard', AlliedUserCreationWizard::class)->name('allieduserWizard');

// Route::get('/allieduserWizard', function() {
//     $state = [
//         'role' => 'aliado',
//         'user' => 'aliado1',
//         'email' => 'aliado1@gmail.com',
//         'password' => '12345678',
//         'password_confirmation' => '12345678',
//     ];
//     return view('livewire.aliado.allied-user-creation-wizard', ['currentStep' => 1, 'state' => $state ]);
// })->name('allieduserWizard');