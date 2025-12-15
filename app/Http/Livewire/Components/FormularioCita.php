<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Cita; // Importar el Modelo Cita

class FormularioCita extends Component
{
    public function store(Request $request)
    {
        // 1. VALIDACIÓN de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:citas,email', // Asegura email único en tabla citas
            'telefono' => 'required|string|max:50',
            'tipo_negocio' => 'required|string|in:Distribuidor,Fabricante,Minorista,Otro',
            'fecha_preferida' => 'nullable|date',
        ]);

        // 2. GUARDAR los datos en la base de datos
        Cita::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'tipo_negocio' => $request->tipo_negocio,
            'fecha_preferida' => $request->fecha_preferida,
        ]);
        
        // 3. REDIRECCIONAR con un mensaje de éxito (flash)
        return redirect()->route('agendar.cita')->with('success', 'Gracias por su información, pronto nos comunicaremos con usted.');
    }
    
    public function render()
    {
        return view('livewire.components.formulario-cita');
    }
}
