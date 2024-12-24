<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Menu2Seender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'texto' => 'Carro',
            'ruta' => 'Carro',
            'origen' => 'categories', // view or categories
            'menu' => 1,
            'posicion' => 1,
            'comercio_id' => '2',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Moto',
            'ruta' => 'Moto',
            'origen' => 'categories', // view or categories
            'menu' => 1,
            'posicion' => 2,
            'comercio_id' => '2',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Aceites',
            'ruta' => 'Aceites y líquidos',
            'origen' => 'categories', // view or categories
            'menu' => 1,
            'posicion' => 3,
            'comercio_id' => '2',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Baterias',
            'ruta' => 'baterias',
            'origen' => 'categories', // view or categories
            'menu' => 1,
            'posicion' => 4,
            'comercio_id' => '2',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Frenos',
            'ruta' => 'frenos',
            'origen' => 'categories', // view or categories
            'menu' => 1,
            'posicion' => 5,
            'comercio_id' => '2',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Ofertas',
            'ruta' => 'listOfertas',
            'origen' => 'view', // view or categories
            'menu' => 1,
            'posicion' => 6,
            'comercio_id' => '2',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Vende desde Acá',
            'ruta' => 'vendedesdeaca',
            'origen' => 'view', // view or categories
            'menu' => 1,
            'posicion' => 7,
            'comercio_id' => '2',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'texto' => 'Aliados',
            'ruta' => 'listAliados',
            'origen' => 'view', // view or categories
            'menu' => 1,
            'posicion' => 8,
            'comercio_id' => '2',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
    }
}
