<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Components\Aliados;

use App\Http\Livewire\Components\VendeDesdeAca;

use App\Http\Livewire\Components\Nosotros;

use App\Http\Livewire\Components\Contacto;
use App\Http\Livewire\Components\Cita;
use App\Http\Livewire\Components\FormularioCita;

use App\Http\Livewire\Components\ShowRecommendedExpres;

Route::get('/aliados', function (Request $request) {
    // 1. Acceder a los parámetros usando $request->input('nombre_del_campo')
    $in_cellphonecontact = $request->input('in_cellphonecontact');
    $contactcellphone = $request->input('contactcellphone');
    $msgcontact = $request->input('msgcontact');
    $in_marcasproductos  = $request->input('in_marcasproductos');
    $words               = $request->input('words');
    
    // **NOTA IMPORTANTE:** El campo 'comercio_id' NO está en tu formulario. 
    // Si quieres usarlo, deberás obtenerlo de otra fuente (ej. sesión, base de datos). 
    // Por ahora, lo dejamos como null o lo defines.
    $comercio_id         = null; // O $request->input('comercio_id'); si lo añades al form
    
    // 2. Pasar los parámetros a la vista
    return view('externalviews.aliados', [
        'in_cellphonecontact' => $in_cellphonecontact,
        'contactcellphone' => $contactcellphone,
        'msgcontact' => $msgcontact,
        'in_marcasproductos'  => $in_marcasproductos,
        'words'               => $words,
        'comercio_id'         => $comercio_id // Si tienes este dato de otra fuente
    ]);
})->name('aliados');


Route::get('/vendedesdeaca', function (Request $request) {
    // 1. Acceder a los parámetros usando $request->input('nombre_del_campo')
    $in_cellphonecontact = $request->input('in_cellphonecontact');
    $contactcellphone = $request->input('contactcellphone');
    $msgcontact = $request->input('msgcontact');
    $in_marcasproductos  = $request->input('in_marcasproductos');
    $words               = $request->input('words');
    
    $comercio_id         = null; // O $request->input('comercio_id'); si lo añades al form
    
    // 2. Pasar los parámetros a la vista
    return view('externalviews.vendedesdeaca', [
        'in_cellphonecontact' => $in_cellphonecontact,
        'contactcellphone' => $contactcellphone,
        'msgcontact' => $msgcontact,
        'in_marcasproductos'  => $in_marcasproductos,
        'words'               => $words,
        'comercio_id'         => $comercio_id // Si tienes este dato de otra fuente
    ]);
})->name('vendedesdeaca');

Route::get('/nosotros', function (Request $request) {    
    // 1. Acceder a los parámetros usando $request->input('nombre_del_campo')
    $in_cellphonecontact = $request->input('in_cellphonecontact');

    $contactcellphone = $request->input('contactcellphone');
    $msgcontact = $request->input('msgcontact');
    $in_marcasproductos  = $request->input('in_marcasproductos');
    $words               = $request->input('words');    
    $comercio_id         = null; // O $request->input('comercio_id'); si lo añades al form    
    // 2. Pasar los parámetros a la vista
    return view('externalviews.nosotros', [
        'in_cellphonecontact' => $in_cellphonecontact,
        'contactcellphone' => $contactcellphone,
        'msgcontact' => $msgcontact,
        'in_marcasproductos'  => $in_marcasproductos,
        'words'               => $words,
        'comercio_id'         => $comercio_id // Si tienes este dato de otra fuente
    ]);
})->name('nosotros');

Route::get('/contacto', function (Request $request) {
    // 1. Acceder a los parámetros usando $request->input('nombre_del_campo')
    $in_cellphonecontact = $request->input('in_cellphonecontact');
    $contactcellphone = $request->input('contactcellphone');
    $msgcontact = $request->input('msgcontact');
    $in_marcasproductos  = $request->input('in_marcasproductos');
    $words               = $request->input('words');    
    $comercio_id         = null; // O $request->input('comercio_id'); si lo añades al form    
    // 2. Pasar los parámetros a la vista
    return view('externalviews.contacto', [
        'in_cellphonecontact' => $in_cellphonecontact,
        'contactcellphone' => $contactcellphone,
        'msgcontact' => $msgcontact,
        'in_marcasproductos'  => $in_marcasproductos,
        'words'               => $words,
        'comercio_id'         => $comercio_id // Si tienes este dato de otra fuente
    ]);
})->name('contacto');

Route::get('/politicadeprivacidad', function (Request $request) {
    // 1. Acceder a los parámetros usando $request->input('nombre_del_campo')
    $in_cellphonecontact = $request->input('in_cellphonecontact');
    $contactcellphone = $request->input('contactcellphone');
    $msgcontact = $request->input('msgcontact');
    $in_marcasproductos  = $request->input('in_marcasproductos');
    $words               = $request->input('words');    
    $comercio_id         = null; // O $request->input('comercio_id'); si lo añades al form    
    // 2. Pasar los parámetros a la vista
    return view('externalviews.politicadeprivacidad', [
        'in_cellphonecontact' => $in_cellphonecontact,
        'contactcellphone' => $contactcellphone,
        'msgcontact' => $msgcontact,
        'in_marcasproductos'  => $in_marcasproductos,
        'words'               => $words,
        'comercio_id'         => $comercio_id // Si tienes este dato de otra fuente
    ]);
})->name('politicadeprivacidad');



Route::get('/agendar', function (Request $request) {
    // 1. Acceder a los parámetros usando $request->input('nombre_del_campo')
    $in_cellphonecontact = $request->input('in_cellphonecontact');
    $contactcellphone = $request->input('contactcellphone');
    $msgcontact = $request->input('msgcontact');
    $in_marcasproductos  = $request->input('in_marcasproductos');
    $words               = $request->input('words');    
    $comercio_id         = null; // O $request->input('comercio_id'); si lo añades al form    
    // 2. Pasar los parámetros a la vista
    return view('externalviews.cita', [
        'in_cellphonecontact' => $in_cellphonecontact,
        'contactcellphone' => $contactcellphone,
        'msgcontact' => $msgcontact,
        'in_marcasproductos'  => $in_marcasproductos,
        'words'               => $words,
        'comercio_id'         => $comercio_id // Si tienes este dato de otra fuente
    ]);
})->name('agendar');



// Ejemplo en routes/web.php
// Route::post('/cita-guardar', [FormularioCita::class, 'store'])->name('cita.guardar');
Route::GET('/agendar.cita', Cita::class)->name('agendar.cita');

Route::get('/recomendados', ShowRecommendedExpres::class)->name('recomendados');