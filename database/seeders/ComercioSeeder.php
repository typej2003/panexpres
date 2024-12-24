<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ComercioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comercios')->insert([
            'area_id' => '1',
            'user_id' => '1',
            'keyword' => 'panexpres',
            'name' => 'PanExpres',
            'avatar' => '',
            'banner' => '',
            'contactcellphone' => '04165800403',
            'contactphone'  => '0212-578-44-68',
            'horario'  => 'Lunes a Domingo hora: 6:30 am a 8:00 pm',
            'email'  => 'ddrsistemas@gmail.com',
            'youtube'  => 'https://www.youtube.com/@ddrsistemas',
            'twitter'  => 'https://www.youtube.com/@ddrsistemas',
            'facebook'  => 'https://www.youtube.com/@ddrsistemas',
            'dominio' => 'http://www.repuestoexpres.com',
            'address'  => 'Caracas, Venezuela',
            'rifLetter' => 'J',
            'rifNumber' => '31512955-8',
            // 'dominio' => 'http://www.repuestoexpres.com',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('comercios')->insert([
            'area_id' => '1',
            'user_id' => '2',
            'keyword' => 'panaderiaexpreso',
            'name' => 'Panaderia expreso',
            'avatar' => 'nickpanaderia.png',
            'banner' => 'nickpanaderia.png',
            'contactcellphone' => '04162222222',
            'contactphone'  => '0212-222-22-22',
            'horario'  => 'Lunes a Domingo hora: 6:30 am a 8:00 pm',
            'email'  => 'panaderiaexpreso@gmail.com',
            'youtube'  => 'https://www.youtube.com/@ddrsistemas',
            'twitter'  => 'https://www.youtube.com/@ddrsistemas',
            'facebook'  => 'https://www.youtube.com/@ddrsistemas',
            'dominio' => 'http://www.repuestoexpres.com',
            'address'  => 'Caracas, Venezuela',
            'rifLetter' => 'J',
            'rifNumber' => '22222222-8',
            // 'dominio' => 'http://www.repuestoexpres.com',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('comercios')->insert([
            'area_id' => '2',
            'user_id' => '3',
            'keyword' => 'comercio3',
            'name' => 'Comercio 3',
            'avatar' => '',
            'banner' => '',
            'contactcellphone' => '04163333333',
            'contactphone'  => '0212-333-33-33',
            'horario'  => 'Lunes a Domingo hora: 6:30 am a 8:00 pm',
            'email'  => 'comercio3@gmail.com',
            'youtube'  => 'https://www.youtube.com/@ddrsistemas',
            'twitter'  => 'https://www.youtube.com/@ddrsistemas',
            'facebook'  => 'https://www.youtube.com/@ddrsistemas',
            'dominio' => 'http://www.repuestoexpres.com',
            'address'  => 'Caracas, Venezuela',
            'rifLetter' => 'J',
            'rifNumber' => '33333333-8',
            // 'dominio' => 'http://www.repuestoexpres.com',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
    }
}

        
        
        