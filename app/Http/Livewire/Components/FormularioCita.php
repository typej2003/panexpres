<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Cita; // Importar el Modelo Cita
use App\Http\Livewire\Notificacion\EmailController;

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

        try {

        // 2. GUARDAR los datos en la base de datos
        $cita = Cita::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'tipo_negocio' => $request->tipo_negocio,
            'fecha_preferida' => $request->fecha_preferida,
        ]);

        $emailcita = new EmailController();
        $user = User::where('role', 'root')->first();
        $info = 'Agenda Cita' . PHP_EOL . 
        "Nombre: " . $cita->nombre . PHP_EOL . 
        "Email: " . $cita->email . PHP_EOL . 
        "Telefono: " . $cita->telefono . PHP_EOL . 
        "Tipo de Negocio: " . $cita->tipo_negocio . PHP_EOL . 
        "Fecha preferida: " . $cita->fecha_preferida;

        $emailcita->sendEmailAdmin('info', $user, $info );
        
        // 3. REDIRECCIONAR con un mensaje de éxito (flash)
        return redirect()->route('agendar.cita')->with('success', 'Gracias por su información, pronto nos comunicaremos con usted.');
        
        } catch (\Exception $e) {
            session()->flash('error', 'Error al enviar el correo: ' . $e->getMessage());
        }
    }
    
    public function render()
    {
        return view('livewire.components.formulario-cita');
    }
}
