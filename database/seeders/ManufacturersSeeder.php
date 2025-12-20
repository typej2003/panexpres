<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        DB::table('manufacturers')->insert([
            'name' => 'Panaderia Expreso',
            'avatar' => 'logo_expreso.jpg',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Panaderia Dimary',
            'avatar' => 'logo_panaderiadimary.jpg',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '3',
            'comercio_id' => '3',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Panaderia Loira de Paris',
            'avatar' => 'logo_panaderialoiradeparis.jpg',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '4',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

    }
}
