<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class ApiController extends Controller
    {
        public function recibirDatos(Request $request)
        {
            // Accede a los datos enviados
            $datos = $request->all();

            // Aquí procesas los datos
            // Por ejemplo, guardar en la base de datos
            // Ejemplo:
            // \App\Models\TuModelo::create($datos);

            // Retorna una respuesta
            return response()->json(['message' => 'Datos recibidos'], 200);
        }
    }