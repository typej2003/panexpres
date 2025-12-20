<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use App\Http\Livewire\Notificacion\EmailController;

use Livewire\Component;
use App\Models\Cita as CitaModel; // Asegúrate de tener el modelo
use App\Models\User;

class HacerCita extends Component
{
    // Definimos las propiedades para que Livewire las "escuche"
    public $nombre, $email, $telefono, $tipo_negocio, $fecha_preferida;
    public $mensaje;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        // 'email' => 'required|email|unique:citas,email',
        'email' => 'required|email',
        'telefono' => 'required|string|max:50',
        'tipo_negocio' => 'required|string|in:Fabricante,aliado,promotor,delivery',
        'fecha_preferida' => 'nullable|date',
    ];

    public function store()
    {
        // 1. Validar (si falla, Livewire detiene todo y muestra errores en la vista)
        $this->validate();

        try {
            // 2. Guardar en BD
            
            $cita = CitaModel::create([
                'nombre' => $this->nombre,
                'email' => $this->email,
                'telefono' => $this->telefono,
                'tipo_negocio' => $this->tipo_negocio,
                'fecha_preferida' => $this->fecha_preferida,
            ]);

            // 3. Lógica de correos
            $user = User::where('role', 'root')->first();
            $info = "Agenda Cita\nNombre: {$cita->nombre}\nEmail: {$cita->email}";
            
            $emailController = new EmailController();
            $emailController->sendEmailAdmin('info', $user, $info);

            $user = User::where('email', 'typej2003@gmail.com')->first();
            $emailController->sendEmailAdmin('info', $user, $info);

            // 4. Feedback al usuario
            session()->flash('success', 'Gracias por su información, pronto nos comunicaremos con usted.');
            
            // Limpiar el formulario
            $this->reset(['nombre', 'email', 'telefono', 'tipo_negocio', 'fecha_preferida']);

        } catch (\Exception $e) {
            session()->flash('error', 'Ocurrió un error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.components.hacer-cita');
    }
}
