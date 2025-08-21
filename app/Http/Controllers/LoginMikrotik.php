<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginMikrotik extends Controller
{
    public function loginMikrotik()
    {
        return view('loginMikrotik');
    }

    public function accesoMikrotik()
    {
        $data = ['valor' => "Operacion exitosa a traves de api!", 'success' => true ];
        return response()->json($data);
    }
}
