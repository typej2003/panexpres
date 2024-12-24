<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Manufacturers3Seender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert([
            'name' => 'RENAULT',
            'avatar' => 'renault.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '3',
            'comercio_id' => '3',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'PEUGEOT',
            'avatar' => 'peugeot.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '3',
            'comercio_id' => '3',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'CITROEN',
            'avatar' => 'citroen.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '3',
            'comercio_id' => '3',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'TOYOTA',
            'avatar' => 'toyota.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '3',
            'comercio_id' => '3',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'WOLKSWAGEN',
            'avatar' => 'wolkswagen.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '3',
            'comercio_id' => '3',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'FORD',
            'avatar' => 'ford.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '3',
            'comercio_id' => '3',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'FIAT',
            'avatar' => 'fiat.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '3',
            'comercio_id' => '3',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'CHEVROLET',
            'avatar' => 'chevrolet.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '3',
            'comercio_id' => '3',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'CHERY',
            'avatar' => 'chery.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '3',
            'comercio_id' => '3',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
    }
}
