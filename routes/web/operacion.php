<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

use App\Http\Livewire\Operacion\MakePayment;

use App\Http\Livewire\Recursos\Selectul;

use App\Http\Livewire\Components\Currency;

use App\Http\Livewire\Components\MenuComponent;

use App\Http\Livewire\Afiliado\Pasarela;
use App\Http\Livewire\Afiliado\Shipping;
use App\Http\Livewire\Carrito\Procesado;

use App\Http\Livewire\Recursos\ApiController;

use App\Http\Livewire\Recursos\ImportExportExcel;

use App\Models\Pedido;
use App\Models\Transaccion;
use App\Http\Controlles\CartController;

// Route::get('/pasarela/{nropedido}/{comercioId}', Pasarela::class)->name('pasarela')->middleware('auth');
Route::get('/pasarela', Pasarela::class)->name('pasarela')->middleware('auth');
Route::get('/enviarDataPasarela', [Pasarela::class, 'enviarDataPasarela'])->name('enviardataPasarela');

Route::get('/shipping/{nropedido}', Shipping::class)->name('shipping')->middleware('auth');

Route::get('/checkout/shipping/{nropedido}', [WelcomeController::class, 'checkoutShipping'])->name('checkout.shipping'); 

Route::get('/checkout/pasarela/{nropedido}/{comercioId}', [WelcomeController::class, 'checkoutPasarela'])->name('checkout.pasarela'); 

Route::get('/procesado', function(){
    return view('externalviews.procesado');
})->name('procesado'); 

Route::get('/procesado', function(){
    return view('externalviews.procesado');
})->name('procesado');

// Route::get('/pagosatisfactorio/{token}', [ApiController::class, 'pagosatisfactorio'])->name('pagosatisfactorio')->middleware('auth');
Route::get('/receiveBDV/{toke}', [WelcomeController::class, 'receiveBDV'])->name('receiveBDV'); 

// Route::get('/checkout/shipping/{nropedido}', function($nropedido){
//     return view('externalviews.checkout', [
//         'nropedido' => $nropedido,
//     ]);
// })->name('checkout.shipping')->middleware('auth');


// extras

Route::get('/pagosatisfactorio/{id}', function ( $id ) {
    $id_suc = $id;
    //$pasarela = Pasarela();
    $result = Pasarela::class;
    $result->registrarReferencia($id);
    
    return view('externalviews.pagosatisfactorio', compact('id_suc') );
});


Route::get('/showCurrency', Currency::class,)->name('showCurrency');

Route::get('/menu', MenuComponent::class,)->name('menu');

Route::get('/MakePayment/{comercioId}', MakePayment::class)->name('MakePayment')->middleware('auth');

Route::get('/selectul', Selectul::class)->name('selectul');

Route::post('pasarelaPost', Pasarela::class)->name('pasarelaPost')->middleware('auth');

// Importar excel
// Route::get('/file-import',[ExcelController::class,'importView'])->name('import-view');
Route::post('/import',[ImportExportExcel::class,'import'])->name('import');
Route::get('/export-users',[ImportExportExcel::class,'exportUsers'])->name('export-users');

Route::get('/file-import', ImportExportExcel::class)->name('file-import');


