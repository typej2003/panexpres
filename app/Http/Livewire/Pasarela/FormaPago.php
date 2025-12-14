<?php

namespace App\Http\Livewire\Pasarela;

use Livewire\Component;

class FormaPago extends Component
{
    // Propiedad para almacenar la selección
    public $formaDePago; 

    // Opciones estáticas para la vista
    public $options = [
        ['name' => 'Pasarela', 'subtitle' => 'Paga con tarjeta en línea.', 'value' => 'Pasarela'],
        ['name' => 'Kiosko', 'subtitle' => 'Genera un código para pagar en Kiosko.', 'value' => 'Kiosko'],
    ];

    // Método que se llama al hacer clic en el botón de confirmación
    public function selectFormaDePago()
    {
        if ($this->formaDePago) {
            // Emitimos un evento al componente padre para que cambie de paso
            $this->dispatch('formaPagoSelected', [
                'forma' => $this->formaDePago
            ]);
        } else {
            session()->flash('error_message_fp', 'Por favor, seleccione una forma de pago.');
        }
    }

    public function render()
    {
        return view('livewire.pasarela.forma-pago');
    }
}