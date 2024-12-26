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
        // id 1
        DB::table('comercios')->insert([
            'area_id' => '1',
            'user_id' => '1',
            'keyword' => 'panexpres',
            'name' => 'PanExpres',
            'avatar' => 'panexpres_logo.png',
            'banner' => 'panexpres_banner.png',
            'contactcellphone' => '04265173538',
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
        // id 2
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
        // id 3
        DB::table('comercios')->insert([
            'area_id' => '1',
            'user_id' => '2',
            'keyword' => 'panaderiadoralta',
            'name' => 'Panaderia Doralta',
            'avatar' => 'logo_doralta.png',
            'banner' => 'logo_doralta.png',
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
        // id 4
        DB::table('comercios')->insert([
            'area_id' => '1',
            'user_id' => '2',
            'keyword' => 'Panaderiaolandely',
            'name' => 'Panadería OLANDELY',
            'avatar' => 'logos_olandely_01.png',
            'banner' => 'logos_olandely_01.png',
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
        // id 5
        DB::table('comercios')->insert([
            'area_id' => '1',
            'user_id' => '2',
            'keyword' => 'cafetown',
            'name' => 'Cafetown',
            'avatar' => 'logo_cafetown.png',
            'banner' => 'logo_cafetown.png',
            'contactcellphone' => '04162222222',
            'contactphone'  => '0212-222-22-22',
            'horario'  => 'Lunes a Domingo hora: 6:30 am a 8:00 pm',
            'email'  => 'panaderiaexpreso@gmail.com',
            'youtube'  => 'https://www.youtube.com/@ddrsistemas',
            'twitter'  => 'https://www.youtube.com/@ddrsistemas',
            'facebook'  => 'https://www.youtube.com/@ddrsistemas',
            'dominio' => 'http://www.repuestoexpres.com',
            'instagram' => 'https://www.instagram.com/coffeetown.ccs/?hl=es',
            'address'  => 'Caracas, Venezuela',
            'rifLetter' => 'J',
            'rifNumber' => '22222222-8',
            // 'dominio' => 'http://www.repuestoexpres.com',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // id 6
        DB::table('comercios')->insert([
            'area_id' => '1',
            'user_id' => '2',
            'keyword' => 'titanium',
            'name' => 'Titanium',
            'avatar' => 'logos_panaderiatitanium_01.png',
            'banner' => 'logos_panaderiatitanium_01.png',
            'contactcellphone' => '04162222222',
            'contactphone'  => '0212-222-22-22',
            'horario'  => 'Lunes a Domingo hora: 6:30 am a 8:00 pm',
            'email'  => 'panaderiaexpreso@gmail.com',
            'youtube'  => 'https://www.youtube.com/@ddrsistemas',
            'twitter'  => 'https://www.youtube.com/@ddrsistemas',
            'facebook'  => 'https://www.youtube.com/@ddrsistemas',
            'dominio' => 'http://www.repuestoexpres.com',
            'instagram' => 'https://www.instagram.com/coffeetown.ccs/?hl=es',
            'address'  => 'Caracas, Venezuela',
            'rifLetter' => 'J',
            'rifNumber' => '22222222-8',
            // 'dominio' => 'http://www.repuestoexpres.com',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        
    }
}

        
        
        