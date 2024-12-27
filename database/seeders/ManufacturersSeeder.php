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
            'avatar' => 'logoexpreso.jpg',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Vollmer Bakery',
            'avatar' => 'logovollmer.png',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Cafetown',
            'avatar' => 'logo_cafetown.png',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Doralta',
            'avatar' => 'logo_doralta.png',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Olandey',
            'avatar' => 'logos_olandely_01.png',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Candelaria',
            'avatar' => 'logos_panaderiacandelaria_01.png',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Titanium',
            'avatar' => 'logos_panaderiatitanium_01.png',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Rio',
            'avatar' => 'logos_rio_01.png',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'Rio',
            'avatar' => 'logos_gama.png',
            'mercado' => 'original',
            'area_id' => '1',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

    }
}
