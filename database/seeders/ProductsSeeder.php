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
            'name' => 'Pan de Jamón de 650 gramos',
            'description' => 'Pan de Jamón de 650 gramos',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 7.0, //precio al detal
            'profit_price' => 12, // porcentaje de ganancia
            'price_mayor' => 1, //precio al mayor
            'profit_mayor' => 12, // porcentaje de ganancia
            'price_offer' => 1, //precio de oferta
            'profit_offer' => 12, // porcentaje de ganancia
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'user_id' => 1,
            'area_id' => 1,
            'comercio_id' => 3,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'C0002',
            'code' => 'C0002',
            'name' => 'DORALTA Combo navideño',
            'description' => 'Pan de Jamón de 650 gramos',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 9.0, //precio al detal
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
            'user_id' => 1,
            'area_id' => 1,
            'comercio_id' => 3,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'P0002',
            'code' => 'P0002',
            'name' => 'Pan de Jamón de 1000 gramos',
            'description' => 'Pan de Jamón de 1000 gramos',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 10.0, //precio al detal
            'profit_price' => 12, // porcentaje de ganancia
            'price_mayor' => 1, //precio al mayor
            'profit_mayor' => 12, // porcentaje de ganancia
            'price_offer' => 1, //precio de oferta
            'profit_offer' => 12, // porcentaje de ganancia
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'user_id' => 1,
            'area_id' => 1,
            'comercio_id' => 4,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'C0002',
            'code' => 'C0002',
            'name' => 'OLANDELY Combo navideño',
            'description' => 'Pan de Jamón de 1000 gramos',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 12.0, //precio al detal
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
            'user_id' => 1,
            'area_id' => 1,
            'comercio_id' => 4,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'P0003',
            'code' => 'P0003',
            'name' => 'Pan de Jamón de 1000 gramos',
            'description' => 'Pan de Jamón de 1000 gramos',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 10.0, //precio al detal
            'profit_price' => 12, // porcentaje de ganancia
            'price_mayor' => 1, //precio al mayor
            'profit_mayor' => 12, // porcentaje de ganancia
            'price_offer' => 1, //precio de oferta
            'profit_offer' => 12, // porcentaje de ganancia
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'user_id' => 1,
            'area_id' => 1,
            'comercio_id' => 4,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'C0003',
            'code' => 'C0003',
            'name' => 'OLANDELY Combo navideño',
            'description' => 'Pan de Jamón de 1000 gramos',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 12.0, //precio al detal
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
            'user_id' => 1,
            'area_id' => 1,
            'comercio_id' => 4,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'P0004',
            'code' => 'P0004',
            'name' => 'Pan de Jamón  de 1000 gramos',
            'description' => 'Pan de Jamón de 1000 gramos',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 12.0, //precio al detal
            'profit_price' => 12, // porcentaje de ganancia
            'price_mayor' => 1, //precio al mayor
            'profit_mayor' => 12, // porcentaje de ganancia
            'price_offer' => 1, //precio de oferta
            'profit_offer' => 12, // porcentaje de ganancia
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'user_id' => 1,
            'area_id' => 1,
            'comercio_id' => 5,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'C0004',
            'code' => 'C0004',
            'name' => 'Cafetown Combo navideño',
            'description' => 'Pan de Jamón de 1000 gramos',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 14.0, //precio al detal
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
            'user_id' => 1,
            'area_id' => 1,
            'comercio_id' => 5,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'P0005',
            'code' => 'P0005',
            'name' => 'Pan de 700 gramos',
            'description' => 'Pan de 700 gramos',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 9.0, //precio al detal
            'profit_price' => 12, // porcentaje de ganancia
            'price_mayor' => 1, //precio al mayor
            'profit_mayor' => 12, // porcentaje de ganancia
            'price_offer' => 1, //precio de oferta
            'profit_offer' => 12, // porcentaje de ganancia
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'user_id' => 1,
            'area_id' => 1,
            'comercio_id' => 6,
            'category_id' => 2,
            'subcategory_id' => 10,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'C0005',
            'code' => 'C0005',
            'name' => 'Titanium Combo navideño',
            'description' => 'Pan de 700 gramos',
            'avatar' => 'panjamon.png',
            'manufacturer_id' => '1', //marca
            'brand_id' => 1, //marca
            'container_id' => 1, //envase
            'currency' => '$', //moneda
            'price1' => 11.0, //precio al detal
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
            'user_id' => 1,
            'area_id' => 1,
            'comercio_id' => 6,
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





