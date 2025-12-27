<?php

namespace App\Http\Livewire\Aliado;

use Livewire\Component;
use OneSignal;

class Mapa extends Component
{

    public function asignarPedido($pedidoId, $user) {
        // ... lógica de asignación ...

        OneSignal::sendNotificationToUser(
            "Tienes una nueva entrega de PanExpres asignada.",
            $user->onesignal_id,
            $url = null,
            $data = ['pedido_id' => $pedidoId]
        );
    }

    public function render()
    {
        return view('livewire.aliado.mapa');
    }
}
