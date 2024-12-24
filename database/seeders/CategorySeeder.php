<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Carro',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Camión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '0',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Moto',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '0',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Aceite de motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Neumáticos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Herramientas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '0',
            'posicionMenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Aceites y líquidos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Frenos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Filtros',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Electromovilidad',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sistema limpiaparabrisas',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Encendido y precalentamiento',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Suspensión',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sistema eléctrico',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Amortiguación',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Correas, cademas y rodillos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sistema de refrigeración del motor',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Carrocería',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Calefacción y ventilación',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Juntas y retenes',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Escape',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Interior',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sistema de combustible',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Dirección',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Embrague',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Palier y junta homocinética',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Remolque / piezas adicionales',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Caja de cambios',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Aire acondicionado',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Rodamientos',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Árboles de transmisión y diferenciales',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sensores, relés, unidades de control',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Accesorios para automóviles',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 4,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Kits de reparación',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Herramientas y equipo',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Tuberías y mangueras',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Productos para cuidado del auto',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Iluminación',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Tuning',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sujeciones',
            'avatar' => '',
            'user_id' => '1',
            'comercio_id' => '1', 
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'created_at' => '22-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

    }
}

