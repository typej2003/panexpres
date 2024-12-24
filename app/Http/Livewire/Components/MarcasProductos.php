<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;

use App\Models\Manufacturer;

class MarcasProductos extends AdminComponent
{
    public function render()
    {
        $subcategorias = Manufacturer::where('comercio_id', 1)->where('mercado', 'original')->get();

        return view('livewire.components.marcas-productos', [
            'subcategorias' => $subcategorias,
        ]);
    }
}
