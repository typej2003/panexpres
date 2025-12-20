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
        // expreso id=2  prod = 1
        DB::table('products')->insert([
            'code_lote' => 'P0001',
            'code' => 'P0001',
            'name' => 'Promo Compra 10+1 panes',
            'description' => 'Compra 10 Panes de Jamón de 700 gramos y regalamos 1 mas',
            'details1' => 'Compra 10 Pan de Jamón de 700 gramos y te regalamos 1 pan',
            'image_path1' => 'promo10+1_panexpreso.jpg',
            'manufacturer_id' => '2', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 110.0, //precio al detal
            'profit_price' => 0, // porcentaje de ganancia
            'price_mayor' => 0, //precio al mayor
            'profit_mayor' => 0, // porcentaje de ganancia
            'price_offer' => 100, //precio de oferta
            'profit_offer' => 12, // porcentaje de ganancia
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 100, // cant en almacen
            'area_id' => 1,
            'user_id' => 1,
            'comercio_id' => 2,
            'category_id' => 2,
            'subcategory_id' => 1,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        // expreso id=2  prod = 2
        DB::table('products')->insert([
            'code_lote' => 'P0002',
            'code' => 'P0002',
            'name' => 'Combo Pan de Jamón + Refresco 1.5 l',
            'description' => '1 Pan de Jamón de 700 g + Pepsi 1.5 l',
            'details1' => '1 Pan de Jamón de 700 g + Pepsi 1.5 l',
            'image_path1' => 'combopandejamon+refresco_panexpreso.jpg',
            'manufacturer_id' => '2', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 1.0, //precio al detal
            'profit_price' => 12, // porcentaje de ganancia
            'price_mayor' => 1, //precio al mayor
            'profit_mayor' => 12, // porcentaje de ganancia
            'price_offer' => 1, //precio de oferta
            'profit_offer' => 12, // porcentaje de ganancia
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'in_delivery' => '1', 
            'in_combo' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'area_id' => 1,
            'user_id' => 1,
            'comercio_id' => 2,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // panaderiadoralta id= 3 prod=3
        DB::table('products')->insert([
            'code_lote' => 'P0001',
            'code' => 'P0001',
            'name' => 'Pan de Jamón de 700 g',
            'description' => 'Pan de Jamón de 700 g, a partir de 3 panes delivery gratis',
            'details1' => '3 Pan de Jamón de 700 g con delivery gratis',
            'image_path1' => 'pandejamon_panexpreso.jpg',
            'manufacturer_id' => '2', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 10.0, //precio al detal
            'profit_price' => 12, // porcentaje de ganancia
            'price_mayor' => 1, //precio al mayor
            'profit_mayor' => 12, // porcentaje de ganancia
            'price_offer' => 10.0, //precio de oferta
            'profit_offer' => 12, // porcentaje de ganancia
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 100, // cant en almacen
            'area_id' => 1,
            'user_id' => 1,
            'comercio_id' => 3,
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





