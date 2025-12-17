<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromocionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promocions')->insert([   
            'product_id' => null,
            'comercio_id' => 1,
            'title' => 'banner 01',
            'avatar' => 'banner_01.jpg',
            'order' => 1,
            'active' => 'active',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('promocions')->insert([   
            'product_id' => null,
            'comercio_id' => 1,
            'title' => 'banner 02',
            'avatar' => 'banner_02.jpg',
            'order' => 2,
            'active' => 'active',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('promocions')->insert([   
            'product_id' => null,
            'comercio_id' => 1,
            'title' => 'banner 03',
            'avatar' => 'banner_03.jpg',
            'order' => 3,
            'active' => 'active',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('promocions')->insert([   
            'product_id' => null,
            'comercio_id' => 1,
            'title' => 'banner 04',
            'avatar' => 'banner_04.jpg',
            'order' => 4,
            'active' => 'active',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('promocions')->insert([   
            'product_id' => null,
            'comercio_id' => 1,
            'title' => 'banner 05.jpg',
            'avatar' => 'banner_05.jpg',
            'order' => 5,
            'active' => 'active',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        
        
    }
}
