<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Components\Aliados;

use App\Http\Livewire\Components\VendeDesdeAca;

use App\Http\Livewire\Components\Nosotros;

use App\Http\Livewire\Components\Contacto;

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

Route::get('/vendedesdeaca', function(){
    return view('externalviews.vendedesdeaca', ['parametro1' => '', 'parametro2'  => '']);
})->name('vendedesdeaca');
Route::get('/vendedesdeaca', function (Request $request) {
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
    return view('externalviews.vendedesdeaca', [
        'in_cellphonecontact' => $in_cellphonecontact,
        'contactcellphone' => $contactcellphone,
        'msgcontact' => $msgcontact,
        'in_marcasproductos'  => $in_marcasproductos,
        'words'               => $words,
        'comercio_id'         => $comercio_id // Si tienes este dato de otra fuente
    ]);
})->name('vendedesdeaca');

Route::get('/nosotros', function(){
    return view('externalviews.nosotros', ['parametro1' => '', 'parametro2'  => '']);
})->name('nosotros');

Route::get('/contacto', function(){
    return view('externalviews.contacto', ['parametro1' => '', 'parametro2'  => '']);
})->name('contacto');