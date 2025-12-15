<?php

namespace App\Http\Livewire\Components;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Manufacturer;

class MarcasProductos extends AdminComponent
{
    public function render()
    {
        // Usamos el método has('products') para asegurar que solo se traigan 
        // los fabricantes que tienen AL MENOS un producto asociado.
        $manufacturers = Manufacturer::where('comercio_id', 1)
                                     ->where('mercado', 'original')
                                     ->has('products') // <--- CLAVE
                                     ->get();

        return view('livewire.components.marcas-productos', [
            'manufacturers' => $manufacturers,
        ]);
    }
}