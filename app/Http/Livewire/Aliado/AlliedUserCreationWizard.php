<?php

namespace App\Http\Livewire\Aliado;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\DatosBasicos;
use App\Models\Comercio;
use Illuminate\Support\Facades\Hash;

class AlliedUserCreationWizard extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $logo;

    public $state = [
        // Paso 1: Registro
        'name' => 'aliado1',
        'email' => 'aliado1@gmail.com',
        'password' => '12345678',
        'password_confirmation' => '12345678',
        'identificationNac' => 'V',
        'identificationNumber' => '13053081',
        'role' => 'aliado',
        // Paso 2: Identidad
        'names' => '',
        'surnames' => '',
        // Paso 3: Contacto
        'cellphonecode' => '',
        'cellphone' => '',
        'address' => '',
        // Paso 4: Comercio
        'nameC' => '',
        'rifLetter' => 'J',
        'rifNumber' => '',
        'comercio_email' => '',
        'contactcellphone' => '',
        'contactphone' => '',
        'msgcontact' => '',
        'horario' => '',
    ];

    public function mount($currentStep = 1)
    {
        
        $this->currentStep = 1;
        // Si ya está logueado, determinar dónde quedó
        if (Auth::check()) {
            $this->determinarPaso();
            $this->cargarDatosExistentes();
        }
    }

    public function determinarPaso()
    {
        $user = Auth::user();
        if (!$user) { $this->currentStep = 1; return; }

        // PASO 2: Datos básicos de User
        if (empty($user->names) || empty($user->surnames) || empty($user->identificationNac) || empty($user->identificationNumber)) {
            $this->currentStep = 2; return;
        }

        // PASO 3: Contacto
        $datos = $user->datosBasicos;
        if (!$datos || empty($datos->cellphonecode) || empty($datos->cellphone) || empty($datos->address)) {
            $this->currentStep = 3; return;
        }

        // PASO 4: Comercio
        $comercio = $user->comercio;
        if (!$comercio || $this->faltanDatosComercio($comercio)) {
            $this->currentStep = 4; return;
        }

        $this->currentStep = 5;
    }

    public function cargarDatosExistentes()
    {
        $user = Auth::user();
        $this->state['username'] = $user->name;
        $this->state['email'] = $user->email;
        $this->state['names'] = $user->names;
        $this->state['surnames'] = $user->surnames;
        $this->state['identificationNac'] = $user->identificationNac ?? 'V';
        $this->state['identificationNumber'] = $user->identificationNumber;

        if ($user->datosBasicos) {
            foreach (['cellphonecode', 'cellphone', 'address'] as $f) {
                $this->state[$f] = $user->datosBasicos->$f;
            }
        }

        if ($user->comercio) {
            foreach (['name', 'rifLetter', 'rifNumber', 'contactcellphone', 'contactphone', 'msgcontact', 'horario'] as $f) {
                $this->state[$f] = $user->comercio->$f;
            }
            $this->state['comercio_email'] = $user->comercio->email;
        }
    }

    public function saveStep1()
    {
        
        $this->validate([
            'state.role' => 'required',
            'state.name' => 'required|unique:users,name',
            'state.email' => 'required|email|unique:users,email',
            'state.password' => 'required|min:8|confirmed',
            'state.identificationNac' => 'required',
            'state.identificationNumber' => 'required|numeric',
        ]);

        
        $user = User::create([
            'name' => $this->state['name'],
            'email' => $this->state['email'],
            'password' => Hash::make($this->state['password']),
            'identificationNac' => $this->state['identificationNac'],
            'identificationNumber' => $this->state['identificationNumber'],
            'role' =>  $this->state['role'],
        ]);

        Auth::login($user);
        $this->determinarPaso();
    }

    public function saveStep2()
    {
        $this->validate([
            'state.names' => 'required|min:3',
            'state.surnames' => 'required|min:3',
            'state.identificationNac' => 'required',
            'state.identificationNumber' => 'required',
        ]);

        Auth::user()->update([
            'names' => $this->state['names'],
            'surnames' => $this->state['surnames'],
            'identificationNac' => $this->state['identificationNac'],
            'identificationNumber' => $this->state['identificationNumber'],
        ]);

        $this->determinarPaso();
    }

    public function saveStep3()
    {
        $this->validate([
            'state.cellphonecode' => 'required',
            'state.cellphone' => 'required',
            'state.address' => 'required|min:10',
        ]);

        Auth::user()->datosBasicos()->updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'cellphonecode' => $this->state['cellphonecode'],
                'cellphone' => $this->state['cellphone'],
                'address' => $this->state['address'],
            ]
        );

        $this->determinarPaso();
    }

    public function saveStep4()
    {
        $this->validate([
            'state.nameC' => 'required',
            'state.rifLetter' => 'required',
            'state.rifNumber' => 'required',
            'state.comercio_email' => 'required|email',
            'logo' => 'nullable|image|max:1024',
        ]);

        $logoName = null;
        if ($this->logo) {
            $logoName = $this->logo->getClientOriginalName();
            $this->logo->storeAs('avatarscomercios', $logoName, 'public');
        }

        Auth::user()->comercio()->updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'name' => $this->state['name'],
                'rifLetter' => $this->state['rifLetter'],
                'rifNumber' => $this->state['rifNumber'],
                'email' => $this->state['comercio_email'],
                'contactcellphone' => $this->state['contactcellphone'],
                'contactphone' => $this->state['contactphone'],
                'msgcontact' => $this->state['msgcontact'],
                'horario' => $this->state['horario'],
                'logo' => $logoName ?? (Auth::user()->comercio->logo ?? null)
            ]
        );

        $this->determinarPaso();
    }

    private function faltanDatosComercio($c) {
        $campos = ['name', 'rifLetter', 'rifNumber', 'contactcellphone', 'contactphone', 'msgcontact', 'horario', 'email'];
        foreach ($campos as $f) { if (empty($c->$f)) return true; }
        return false;
    }

    public function render()
    {
        return view('livewire.aliado.allied-user-creation-wizard')
               ->layout('layouts.app1'); // Asegúrate que este sea tu layout
    }
}