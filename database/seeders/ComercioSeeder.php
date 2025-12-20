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
            'contactcellphone' => '04141899016',
            'contactphone'  => '0212-578-44-68',
            'msgcontact'  => 'Hola, te asesoramos por  whatsapp gestiona tu compra por este canal.',
            'horario'  => 'Lunes a Domingo hora: 6:30 am a 8:00 pm',
            'email'  => 'panexpres1@gmail.com',
            'youtube'  => 'https://www.youtube.com/@ddrsistemas',
            'twitter'  => 'https://www.youtube.com/@ddrsistemas',
            'facebook'  => 'https://www.youtube.com/@ddrsistemas',
            'instagram'  => 'https://www.instagram.com/panexpres.vzla/',
            'dominio' => 'http://www.panexpres.com',
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
            'user_id' => '1',
            'keyword' => 'panaderiaexpreso',
            'name' => 'Panaderia expreso',
            'avatar' => 'panexpres_logo.png',
            'banner' => 'nickpanaderia.png',
            'contactcellphone' => '04162222222',
            'contactphone'  => '0212-222-22-22',
            'horario'  => 'Lunes a Domingo hora: 6:30 am a 8:00 pm',
            'email'  => 'ddrsistemas@gmail.com',
            'youtube'  => 'https://www.youtube.com/@ddrsistemas',
            'instagram'  => 'https://instagram/panexpres.vezla',
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
            'user_id' => '3',
            'keyword' => 'panaderiadimary',
            'name' => 'Panaderia Dimary',
            'avatar' => 'logo_dimary.png',
            'banner' => 'banner_dimary.jpg',
            'contactcellphone' => '04141869016',
            'contactphone'  => '0212-222-22-22',
            'horario'  => 'Lunes a Domingo hora: 6:30 am a 8:00 pm',
            'email'  => 'panaderiadimary@gmail.com',
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
            'user_id' => '4',
            'keyword' => 'loiradeparis',
            'name' => 'Panadería Loira de paris',
            'avatar' => 'logo_loiradeparis.png',
            'banner' => 'banner_loiradeparis.jpg',
            'contactcellphone' => '04162222222',
            'contactphone'  => '0212-222-22-22',
            'horario'  => 'Lunes a Domingo hora: 6:30 am a 8:00 pm',
            'email'  => 'panaderialoiradeparis@gmail.com',
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
        
        
    }
}

        
        
        