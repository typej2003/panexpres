<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

use App\Http\Controllers\Api\EnviarDatos;

use App\Http\Controllers\Api\ApiController;
// Para los repartidores
use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\Api\PedidoController;

use App\Http\Controllers\Api\ApiProcessPaymentController;
use App\Http\Controllers\Api\MikrotikPasarelaController;

use App\Http\Livewire\Pagomovil\ListPagomovil;

use App\Http\Controllers\LoginMikrotik;

use App\Http\Livewire\Mikrotik\Hotspot\CreateUser;

use App\Http\Livewire\Mikrotik\Hotspot\ListPlanes;

// Para la app del Delivery
use App\Models\GpsLog;
// Fin de la app

use App\Http\Livewire\Notificacion\SmsWhastappSender;
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
Route::get('createUserSession', [CreateUser::class, 'addNew']);

//Route::get('listPlanes', [ListPlanes::class, 'listPlanes']);
Route::post('listPlanes', [ListPlanes::class, 'listPlanes']);

Route::post('hotspot-login', [CreateUser::class, 'login1']);

Route::apiResource('apiuser', ApiController::class);

Route::post('apiprocesspayment', [ApiProcessPaymentController::class, 'apiprocesspayment']);

Route::post('mikrotikPasarela', [MikrotikPasarelaController::class, 'mikrotikPasarela']);

Route::apiResource('processpayment', MikrotikPasarelaController::class);

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


// Route de la App deliveriy

Route::middleware('auth:sanctum')->post('/data', function (Request $request) {
    $request->validate([
        'lat' => 'required|numeric',
        'lng' => 'required|numeric',
    ]);

    $log = GpsLog::create([
        'user_id'     => $request->user()->id, // Tomamos el ID del usuario autenticado
        'lat'         => $request->lat,
        'lng'         => $request->lng,
        'speed'       => $request->speed,
        'alt'         => $request->alt,
        'recorded_at' => now(), // O el timestamp que envíe la App
    ]);

    return response()->json(['status' => 'success', 'timestamp' => now()], 200);
});

Route::get('/admin/repartidores-ultima-posicion', function () {
    // Obtenemos el último registro de GPS por cada usuario
    return DB::table('gps_logs as g1')
        ->join('users', 'users.id', '=', 'g1.user_id')
        ->select('users.name', 'g1.user_id', 'g1.lat', 'g1.lng', 'g1.speed')
        ->whereRaw('g1.id = (select max(id) from gps_logs as g2 where g2.user_id = g1.user_id)')
        ->get();
});


// Ruta pública para login
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas (Requieren el Token que acabamos de crear)
Route::middleware('auth:sanctum')->group(function () {
    
    // Aquí es donde el repartidor envía su GPS
    Route::post('/data', function (Request $request) {
        // ... lógica de guardado de GPS que hicimos antes ...
    });

    Route::post('/logout', [AuthController::class, 'logout']);
});
// Fin delivery

Route::middleware('auth:sanctum')->post('/data-batch', function (Request $request) {
    try {
        $user = $request->user();
        $positions = $request->input('positions');

        if (!is_array($positions)) {
            return response()->json(['error' => 'Formato de datos inválido'], 400);
        }

        foreach ($positions as $pos) {
            \App\Models\GpsLog::create([
                'user_id'     => $user->id,
                'lat'         => $pos['lat'],
                'lng'         => $pos['lng'],
                'speed'       => $pos['speed'] ?? 0,
                // Carbon ayuda a formatear bien la fecha que viene de JS
                'recorded_at' => \Illuminate\Support\Carbon::parse($pos['recorded_at']),
            ]);
        }

        return response()->json(['status' => 'synced', 'count' => count($positions)], 200);
        
    } catch (\Exception $e) {
        // Esto enviará el error real al log para que lo encuentres
        \Log::error("Error en data-batch: " . $e->getMessage());
        return response()->json(['error' => 'Error interno del servidor'], 500);
    }
});

Route::post('/whatsapp/webhook', [SmsWhastappSender::class, 'handle']);

Route::apiResource('pedidos', PedidoController::class);

Route::get('/pedidos', [PedidoController::class, 'index']);

Route::post('/pedidos/actualizar-estado', [PedidoController::class, 'actualizarEstado']);

