<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\EnviarDatos;

use App\Http\Controllers\Api\ApiController;

use App\Http\Controllers\Api\ApiProcessPaymentController;

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

Route::apiResource('enviardatos', EnviarDatos::class);

Route::apiResource('apiuser', ApiController::class);

//Route::apiResource('apiprocesspayment', ApiProcessPaymentController::class);

Route::post('apiprocesspayment', [ApiProcessPaymentController::class, 'apiprocesspayment']);

