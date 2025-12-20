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
            'product_id' => 1,
            'comercio_id' => 1,
            'title' => 'Promo Compra 10+1 panes',
            'avatar' => 'banner_promo10x1_panexpreso.jpg',
            'order' => 1,
            'active' => 'active',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('promocions')->insert([   
            'product_id' => 2,
            'comercio_id' => 1,
            'title' => 'Combo Pan de Jamón + Refresco 1.5 l',
            'avatar' => 'combo_pandejamonrefresco_panexpreso.jpg',
            'order' => 2,
            'active' => 'active',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('promocions')->insert([   
            'product_id' => 3,
            'comercio_id' => 1,
            'title' => 'Pan de Jamón de 700 g',
            'avatar' => 'banner_pandejamon_panexpreso.jpg',
            'order' => 3,
            'active' => 'active',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        
        DB::table('promocions')->insert([   
            'product_id' => null,
            'comercio_id' => 1,
            'title' => 'Pan de Jamón de 700 g',
            'avatar' => 'banner_rigth_up.jpg',
            'order' => 1,
            'bannerside' => 2,
            'active' => 'active',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('promocions')->insert([   
            'product_id' => null,
            'comercio_id' => 1,
            'title' => 'Pan de Jamón de 700 g',
            'avatar' => 'banner_rigth_down.jpg',
            'order' => 1,
            'bannerside' => 2,
            'active' => 'active',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        
    }
}
