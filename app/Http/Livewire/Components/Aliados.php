<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

use App\Models\Comercio;

class Aliados extends Component
{
    public function render()
    {
        // Traemos solo a los usuarios que son aliados/vendedores
        $aliados = Comercio::query()
            ->where('name', '!=', 'PanExpres')
            ->select('name', 'address', 'contactcellphone')
            ->orderBy('name', 'asc')
            ->paginate(12);

        return view('livewire.components.aliados', [
            'aliados' => $aliados,
        ]);
    }
}
