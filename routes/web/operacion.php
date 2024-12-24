<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Operacion\MakePayment;

use App\Http\Livewire\Recursos\Selectul;

use App\Http\Livewire\Components\Currency;

use App\Http\Livewire\Components\MenuComponent;

use App\Http\Livewire\Afiliado\Pasarela;
use App\Http\Livewire\Afiliado\Shipping;

use App\Http\Livewire\Recursos\ImportExportExcel;

// Route::get('/pasarela/{nropedido}/{comercioId}', Pasarela::class)->name('pasarela')->middleware('auth');
Route::get('/pasarela', Pasarela::class)->name('pasarela')->middleware('auth');
Route::get('/enviarDataPasarela', [Pasarela::class, 'enviarDataPasarela'])->name('enviardataPasarela');

Route::get('/shipping/{nropedido}', Shipping::class)->name('shipping')->middleware('auth');

Route::get('/checkout/shipping', function(){
    return view('externalviews.checkout');
})->name('checkout.shipping')->middleware('auth');

// extras

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