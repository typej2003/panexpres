<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\EnviarDatos;

use App\Http\Controllers\Api\ApiController;

use App\Http\Controllers\Api\ApiProcessPaymentController;

use App\Http\Livewire\Pagomovil\ListPagomovil;

use App\Http\Controllers\LoginMikrotik;

use App\Http\Livewire\Mikrotik\Hotspot\CreateUser;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
    a traves de api
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('datos', [ApiController::class, 'recibirDatosApi']);

Route::apiResource('enviardatos', EnviarDatos::class);

//Crear usuario e iniciar sesion
Route::apiResource('createUserSession', [CreateUser::class, 'addNew'])->name('createUserSession')->middleware('auth');

Route::apiResource('apiuser', ApiController::class);

Route::post('apiprocesspayment', [ApiProcessPaymentController::class, 'apiprocesspayment']);

Route::apiResource('processpayment', ApiProcessPaymentController::class);

//Route::get('/', [WelcomeController::class, 'index'])->name('welcome'); 

// Route::post('/miendpoint', function(Request $request) {

//     $data = $request->json()->all();

//     return response()->json([
//         'message' => 'Datos recibidos correctamente', 'received_data' => $data
//     ]);
// });

Route::post('/capturarPagomovil', [ListPagomovil::class, 'capturarPagomovil']);

Route::get('/accesoMikrotik', [LoginMikrotik::class, 'accesoMikrotik']);


