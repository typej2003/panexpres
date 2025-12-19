<?php

namespace App\Http\Livewire\Notificacion;

use App\Http\Livewire\Notificacion\EmailController;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class EmailManager extends Component
{
    public $search = '';
    public $state = [
        'from_type' => 'ventas',
        'full_name' => '',
        'email' => '',
        'subject' => '',
        'message' => '',
        'footer' => "Pan Express - Calidad en cada bocado.\nAtentamente, el equipo de Notificaciones."
    ];

    // Propiedad computada para obtener usuarios filtrados
    public function getUsuariosProperty()
    {
        return User::where(function($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('names', 'like', '%' . $this->search . '%')
                      ->orWhere('surnames', 'like', '%' . $this->search . '%');
            })
            ->take(10)
            ->get();
    }

    public function seleccionarUsuario(User $user)
    {
        $this->state['full_name'] = trim($user->names . ' ' . $user->surnames);
        // Si no tiene nombres/apellidos, usamos el nombre de usuario
        if (empty($this->state['full_name'])) {
            $this->state['full_name'] = $user->name;
        }
        $this->state['email'] = $user->email;
    }

    public function enviarEmail()
    {
        $this->validate([
            'state.from_type' => 'required',
            'state.email'     => 'required|email',
            'state.full_name' => 'required',
            'state.subject'   => 'required',
            'state.message'   => 'required',
        ], [
            'state.message.required' => 'El contenido del mensaje es obligatorio.'
        ]);

        $config = [
            'admin'   => ['email' => 'admin@panexpres.com', 'name' => 'Administración Pan Express'],
            'soporte' => ['email' => 'soporte@panexpres.com', 'name' => 'Soporte Pan Express'],
            'ventas'  => ['email' => 'ventas@panexpres.com', 'name' => 'Ventas Pan Express'],
        ];

        $remitente = $config[$this->state['from_type']];
        $data = $this->state;

        try {

            $email = new EmailController();

            $email->sendEmailManager('send', $data);
            
            session()->flash('success', 'Email enviado exitosamente desde ' . $remitente['name']);
            $this->reset(['state.full_name', 'state.email', 'state.subject', 'state.message']);
            
        } catch (\Exception $e) {
            session()->flash('error', 'Error al enviar el correo: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.notificacion.email-manager')->layout('layouts.app');
    }
}