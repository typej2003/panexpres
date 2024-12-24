<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'code_lote' => 'P0001',
            'code' => 'P0001',
            'name' => 'Pan',
            'description' => 'Pan de Jamon',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 4.0, //precio al detal
            'profit_price' => 12, // porcentaje de ganancia
            'price_mayor' => 3, //precio al mayor
            'profit_mayor' => 12, // porcentaje de ganancia
            'price_offer' => 3, //precio de oferta
            'profit_offer' => 12, // porcentaje de ganancia
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'user_id' => 1,
            'area_id' => 2,
            'comercio_id' => 1,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

    }
}
