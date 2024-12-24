<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategory2Seender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category Marca
        DB::table('subcategories')->insert([
            'name' => 'RENAULT',
            'avatar' => 'renault.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'PEUGEOT',
            'avatar' => 'peugeot.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 2,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'CITROEN',
            'avatar' => 'citroen.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 3,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'TOYOTA',
            'avatar' => 'toyota.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 4,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'WOLKSWAGEN',
            'avatar' => 'wolkswagen.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 5,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'FORD',
            'avatar' => 'ford.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 6,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'FIAT',
            'avatar' => 'fiat.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 7,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'CHEVROLET',
            'avatar' => 'chevrolet.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 8,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'CHERY',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '1',
            'itemMenu' => '1',
            'itemSubmenu' => '1',
            'posicionMenu' => 9,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Moto
        DB::table('subcategories')->insert([
            'name' => 'Honda',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Yamaha',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 2,
            'posicionSubmenu' => 0,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Suzuki',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Empire Keeway',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Escuda Motorcycles',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bera Motorcycles',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'MD-Haojin',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Skygo',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Toro motorcycles',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Suzuki-haojue',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'AVA Motocicletas',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Hj Motocicletas',
            'avatar' => 'chery.png',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '3',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 0,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);        

        // Aceite y liquidos
        DB::table('subcategories')->insert([
            'name' => 'Aceite de motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aceite de transmisión y aceite de diferencial',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aceite hidráulico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aceite para transmisión automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aditivo para aceite de motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aditivos y tratamientos para la transmisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Agua destilada',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Anticongelante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Limpiador del filtro de partículas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido de dirección asistida',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido de escape diésel / adblue',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '7',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        //Frenos

        DB::table('subcategories')->insert([
            'name' => 'Acumulador de presión del sistema de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Anillo de sensor de abs',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de vacío del sistema de frenado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Botón de freno de mano',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cable de freno de mano',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Chapa protectora de disco de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cilindro de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cilindro principal de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Depósito de líquido de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Discos de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Discos y pastillas de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Fijador de tornillos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Forro de frenos alto rendimiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Freno de disco alto rendimiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Freno de mano',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Freno de tambor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de luz de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de presión, hidráulica de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de casquillos guía, pinza de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de accesorios de las zapatas de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de accesorios, pastillas de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de frenos de tambor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la bomba de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de pinzas de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del bombín de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación, eje de freno de estacionamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Latiguillos de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Lubricantes',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Módulo ABS',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pasta de montaje',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pastillas de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pintura pinza de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pinzas de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pistón de la pinza de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Regulador del freno de tambor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de protección contra sobretensión del ABS',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Repartidor de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor ABS',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de aceleración longitudinal / transversal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de desgaste de pastillas de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Servofreno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de pinzas de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sprays y aerosoles técnicos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tambor de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Tornillo de disco de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubería de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubos de vacío',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control del abs / asr',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 48,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Zapatas de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 49,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Zapatas de freno de mano',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '8',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 50,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Filtros

        DB::table('subcategories')->insert([
            'name' => 'Caja del filtro de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro caja de cambios automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire de alto flujo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire secundario',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de habitáculo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de la bomba de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro deshidratador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro hidráulico de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta del soporte del filtro de aceite del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de cambio de aceite de caja automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de filtros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Llave de filtro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de la caja del filtro de aire',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula del filtro de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '9',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Motor

        DB::table('subcategories')->insert([
            'name' => 'Aceite de motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Ajustador árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador de la correa trapezoidal poli V',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador hidráulico de la correa de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Anticongelante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Apoyo del cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Árbol intermedio de compensación y árbol de compensación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Balancines',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Biela',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bobina',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de agua + kit de correa poli V',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de vacío del sistema de frenado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba inyectora',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Brida de carburador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Brida de refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bujías',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bujías de precalentamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cable del acelerador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cables de bujías',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cadena de accionamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cadena de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Camisa de cilindro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Carril de deslizamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cárter de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Casquillo de pie de biela',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Casquillo de biela',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Caudalímetro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinetes del árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Colector de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Colectores de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conector de la bujía de encendido',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Correa de alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Correa de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Correa trapezoidal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cuerpo de mariposa',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Culata',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Discos del cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Distribuidor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Embrague viscoso de ventilador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Enfriador de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Enfriador EGR',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire de alto flujo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 48,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 49,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas para motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 50,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Intercooler',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 51,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Inyectores',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 52,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de juntas culata',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 53,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de juntas de motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 54,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta anular, conducto aire admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 55,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de agua refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 56,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de bomba de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 57,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 58,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de cárter de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 59,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de colector de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 60,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de colector de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 61,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de culata',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 62,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de enfriador de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 63,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de inyector',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 64,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de tapa de balancines',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 65,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de tapón de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 66,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de tapón de cárter',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 67,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de termostato',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 68,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de valvula egr',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 69,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de válvulas, guía de válvulas y ajuste de válvulas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 70,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta del cárter',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 71,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta del soporte del filtro de aceite del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 72,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta del turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 73,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta, ventilación del bloque motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 74,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit completo de juntas del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 75,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de cadena de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 76,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de correa de alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 77,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 78,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de distribución con bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 79,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de juntas de la tapa de balancines',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 80,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de juntas de turbocompresor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 81,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito de ventilación del cárter',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 82,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito intercambiador de calor de la calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 83,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguitos y tubería',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 84,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Módulo de encendido',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 85,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Módulo EGR',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 86,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piezas de carburador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 87,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piñon del árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 88,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piñon del cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 89,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pistón',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 90,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea de cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 91,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea de inversión y guía, correa de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 92,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea inversión / guía, correa poli V',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 93,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea tensora, correa dentada',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 94,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea tensora, correa poli V',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 95,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea tensora, correa trapezoidal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 96,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Protector antiempotramiento del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 97,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 98,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rampa de inyección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 99,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Regulador de presion de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 100,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de calentadores',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 101,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén de árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 102,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén de la bomba de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 103,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén del cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 104,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retenes de válvulas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 105,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rodillo guía / desviación, correa trapecial',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 106,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rotor de distribuidor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 107,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Segmentos de pistón',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 108,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Semiconos de válvula',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 109,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 110,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 111,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de detonación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 112,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de la presión del combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 113,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de nivel de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de nivel de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 115,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de la presión de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 116,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión del aire de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 117,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión del turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 118,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 119,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del aire de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 120,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del  refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 121,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 122,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del nivel del líquido refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 123,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del pedal del acelerador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 124,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor tps',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 125,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sistema eléctrico del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 126,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sonda lambda (NOx, O2)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 127,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 128,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de balancines',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 129,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de correa de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 130,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de delco',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 131,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de llenado de aceite y junta de llenado de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 132,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 133,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapón de cárter',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 134,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapón de dilatación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 135,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapón del radiador de refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 136,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Taqués hidráulicos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 137,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tensor de cadena de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 138,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tensor de la correa de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 139,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tensor de la correa trapecial poli V',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 140,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Termostato',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 141,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillo de la polea',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 142,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillo del cojinete del cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 143,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillo del volante de inercia',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 144,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillos de culata',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 145,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Transductor de presión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 146,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 147,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de aspiración de bomba del aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 148,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de engrase del turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 149,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo flexible, ventilación del bloque motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 150,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo intercooler',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 151,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tuerca y tornillo de biela',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 152,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 153,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control, mando del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 154,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 155,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de alivio',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 156,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de control del árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 157,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 158,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de ralentí (IAC)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 159,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de regulación del aire de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 160,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula EGR',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 161,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula PCV',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 162,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Varilla de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 163,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Vaso de expansión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 164,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Ventilador de radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 165,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Volante bimasa',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '11',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 166,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        //sistema limpiaparabrisas

        DB::table('subcategories')->insert([
            'name' => 'Bomba de limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba lavafaros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Boquilla de limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Brazo de limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conector de manguito de lavado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conmutador de la columna de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Deposito de agua de limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Escobilla limpiafaros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Eyector de lavafaros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Goma de limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Motor del limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de lluvia',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor, nivel agua lavado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Varillaje de limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '12',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        //Encendido y precalentamiento

        DB::table('subcategories')->insert([
            'name' => 'Bobina',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Bujías',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bujías de precalentamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cables de bujías',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cápsula de vació del distribuidor de encendido',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conector de la bujía de encendido',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Distribuidor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Herramientas para encendido / precalentamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta de cárter del distribuidor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del distribuidor de encendido',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Módulo de encendido',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Relé de calentadores',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rotor de distribuidor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de cigúeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de detonación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa antipolvo del distribuidor de encendido',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de delco',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control, mando del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '13',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        //Suspension

        DB::table('subcategories')->insert([
            'name' => 'Anillo de sensor de abs',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Ballestas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Barra estabilizadora',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bieleta de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Brazo de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Buje de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Buje eje',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Caja cojinete rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Caja de muelle',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Casquillo del pivote de la mangueta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Copela de amortiguador y cojinete',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Eje',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Fuelle de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Guardapolvos amortiguador y topes de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas para suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de montaje de la barra oscilante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la barra de acoplamiento de la barra estabilizadora',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la rótula de la suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del brazo de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Mangueta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pivote de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén del buje de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rodamiento de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rótula axial de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rótula de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rótula de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor ABS',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de aceleración longitudinal / transversal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión de neumáticos (TPMS)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor, luces xenon (regulación alcance luces)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Separadores de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Silentblock de brazo de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Silentblock de la barra estabilizadora',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de amortiguador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de caja de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de la barra estabilizadora',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte, parachoques',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Suspensión de cabina',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Suspensión de la dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillo de ajuste de la inclinación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillos de rueda y tuercas de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tuerca del muñón del eje',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tuercas de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '14',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Sistema eléctrico

        DB::table('subcategories')->insert([
            'name' => 'Alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Anillo de sensor de abs',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Antena',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aparato de mando, calefacción del asiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Batería',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla antiniebla',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla de faro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla de luz de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla intermitente',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla para luces de marcha atrás',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombillas traseras',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombín de arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Botón de luces de emergencia',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Botonera de elevalunas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cable del velocímetro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Caja de fusibles',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Catadióptrico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Caudalímetro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cierre centralizado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Claxon',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Columna de dirección + bomba de dirección eléctrica',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conmutador del pedal del embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conmutador en la columna de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Elevalunas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Escobillas del motor de arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Faros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Faros de xenón',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Fusibles',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas para sistema eléctrico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Iluminación del panel de instrumentos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de espejo retrovisor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de luz de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de marcha atras',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de aforador de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de cables',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit eléctrico para remolque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Lámpara de luz de matrícula',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Lámpara de luz habitáculo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Lámpara para faros de carretera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luces antiniebla',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luces de estacionamiento y luz de posición',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luces omnidireccionales',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz antiniebla trasera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz de maletero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz de matrícula',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz diurna (DRL)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 48,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Mando de luces',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 49,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Motor de arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 50,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Motor del elevalunas eléctrico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 51,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Motor del limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 52,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Motor del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 53,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Motor regulador de faros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 54,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piezas de faros de luz antiniebla',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 55,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piezas de luces traseras',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 56,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piezas del motor de arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 57,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piloto intermitente',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 58,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piloto trasero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 59,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea libre del alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 60,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Presóstato aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 61,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Presostato de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 62,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Recambios para faros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 63,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Regulador de presión de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 64,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Regulador del alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 65,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de calentadores',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 66,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de intermitentes',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 67,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de la bomba de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 68,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé del aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 69,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé del motor de arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 70,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 71,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé multifunción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 72,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Repuestos de alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 73,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Resistencia de ventilador de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 74,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rueda libre del arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 75,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor ABS',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 76,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de ángulo de giro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 77,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 78,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 79,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de desgaste de pastillas de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 80,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de detonación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 81,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de la presión del combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 82,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de la temperatura interior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 83,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de nivel de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 84,
            'created_at' => '2022-08-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de nivel de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 85,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 86,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión de neumáticos (TPMS)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 87,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión del aire de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 88,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión del turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 89,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión gas de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 90,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 91,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del aire de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 92,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 93,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 94,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 95,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura exterior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 96,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de velocidad',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 97,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del nivel del líquido refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 98,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del pedal del acelerador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 99,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor tps',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 100,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor, nivel agua lavado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 101,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor, temp. gas escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 102,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de aparcamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 103,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Solenoide de arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 104,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sonda lambda (NOx, O2)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 105,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tercera luz de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 106,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Transductor de presión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 107,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control de la caja de cambios automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 108,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control de la iluminación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 109,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control de la ventilación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 110,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 111,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control, mando del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 112,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de control del árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 113,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de ralentí (IAC)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '15',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Amortiguación

        DB::table('subcategories')->insert([
            'name' => 'Aceite hidráulico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador telescópico neumático',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Amortiguadores',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Ballestas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Caja de muelle',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Compresor de suspensión neumática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Copela de amortiiguador y cojinete',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Esferas de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Guardapolvos amortiguador y topes de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Guardapolvos de la suspensión neumática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas para amortiguadores / muelles',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de resortes de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de suspensión de muelles y amortiguadores',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Muelles',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé, regulación de nivel',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de amortiguador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte, parachoques',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillo de ajuste de la inclinación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '16',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 114,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Correas cadenas y rodillos

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador de la correa trapezoidal poli V',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador hidráulico de la correa de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cadena de accionamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cadena de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Carril de deslizamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Correa de alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Correa de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Correa trapezoidal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas para correas / cadenas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta del tensor de la cadena de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de cadena de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de correa de alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de distribución con bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito flexible acoplamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea de bomba dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea de cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea de inversión y guía, correa de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea de la bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea inversión / guía, correa poli V',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea libre del alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea tensora, correa dentada',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea tensora, correa poli V',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea tensora, correa trapezoidal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rodillo guía / desviación, correa trapecial',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de correa de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tensor de cadena de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tensor de la correa de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tensor de la correa trapecial poli V',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillo de la polea',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '17',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Sistema de refrigeración del motor

        DB::table('subcategories')->insert([
            'name' => 'Agua destilada',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Anticongelante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Brida de refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Carcasa del ventilador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Embrague viscoso de ventilador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Enfriador de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Hélice del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas para refrigeración del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Intercooler',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de agua refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de enfriador de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de la tubería del refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de termostato',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta tórica del manguito del refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta, brida agente frigorífico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juntas de llenado refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de correa de alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de distribución con bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Limpiador de radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito de radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito del aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito del radiador de aceite de la caja de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito intercambiador de calor de la calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Motor del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piezas de fijación del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea de la bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé del electroventilador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén del interruptor del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sellador de bridas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sellador de radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sellador de uso general',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del nivel del líquido refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapón de dilatación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapón del radiador de refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Termostato',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Termostato de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Vaso de expansión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Ventilador de radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '18',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Carroceria

        DB::table('subcategories')->insert([
            'name' => 'Aislante de capó de motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aletines',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Alijamiento del gato hidráulico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador de capó',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador de maletero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bastidor de techo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla antiniebla',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla de faro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla de luz de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla intermitente',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Bombilla para luces de marcha atrás',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombillas traseras',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Bombín de arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Bombín de cerradura',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Botón de bloqueo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Capó',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Carcasa de retrovisor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Catadióptrico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Cerradura',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Cerradura de maletero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Cerradura guantera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Chapa lateral',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Cierre centralizado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cristal de espejo retrovisor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Crital del faro antiniebla delantero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Cristal faro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Depósito de combustible y tapa',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Eje',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Embellecedor de parachoques',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Emblema',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Espejo retrovisor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Espejo retrovisor interior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Faros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Faros de carretera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Faros de xenón',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Goma para puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Guardabarros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Intermitente lateral',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Interruptor de puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Juego faros principales',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta de parabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Lámpara de luz de matrícula',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Lámpara para faros de carretera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Larguero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Luces antiniebla',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Luces de estacionamiento y luz de posición',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Luces de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Luneta trasera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 48,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Luz antiniebla trasera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 49,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Luz de marcha atrás',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 50,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Luz de matrícula',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 51,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Luz diurna (DRL)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 52,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Manilla de puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 53,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Moldura de paso de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 54,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Moldura de puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 55,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Muelle neumático, capota',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 56,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Panel del piso y panel del bajos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 57,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Parabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 58,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Parachoques',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 59,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Paso de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 60,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Piezas de faros de luz antiniebla',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 61,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Piezas de luces traseras',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 62,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Piezas de puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 63,
            'created_at' => '2022-06-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Piloto intermitente',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 64,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Piloto trasero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 65,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Placa de matrícula y soporte',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 66,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Protector antiempotramiento del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 67,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Puerta trasera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 68,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Recambios para faros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 69,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Refuerzo parachoque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 70,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Rejilla',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 71,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Rejilla antiniebla',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 72,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Revestimiento posterior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 73,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Sensores de aparcamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 74,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Soporte de batería',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '17',
            'posicionMenu' => 1,
            'posicionSubmenu' => 75,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Soporte de parachoques',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 76,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Soporte de radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 77,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Soporte para sensor de aparcamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 78,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Spoiler delantero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 79,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sujeción del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 80,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de gancho remolque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 81,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 82,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tercera luz de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 83,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Umbral',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 84,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de ventilación del depósito de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 85,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Ventana lateral',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '19',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 86,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Calefacción y ventilación

        DB::table('subcategories')->insert([
            'name' => 'Bomba de agua auxiliar',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bujía de precalentamiento de la calefacción auxiliar',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Filtro de habitáculo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Manguito intercambiador de calor de la calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Precalentamiento de agua refrigeración',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Radiador de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Relé del electroventilador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Resistencia de ventilador de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Sensor de la temperatura interior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura exterior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Servomotor de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Unidad de control de la ventilación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Válvula de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Ventilador de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '20',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Juntas y retenes id: 

        DB::table('subcategories')->insert([
            'name' => 'Goma para puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Goma techo solar',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de juntas de motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de agua refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de bomba de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de bomba de agua',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de cárter de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de colector de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de colector de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de culata',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de enfriador de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de inyector',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de la bomba de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de la tubería de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de la tubería del refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de parabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de tapa de balancines',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de tapón de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta de tapón de cárter',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta de termostato',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta de tubo de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta de válvula egr',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta de cárter',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta del filtro de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta del soporte del filtro de aceite del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta del tensor de la cadena de distribución',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta del turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta tórica del manguito del refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta tóricadel tapón roscado del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta, brida agente frigorífico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta, cárter aceite - transm. autom.',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta, luz trasera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta, varilla de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Junta, ventilación del bloque motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Juntas de bomba inyectora',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Juntas de llenado refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Kit completo de juntas del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Kit de juntas del turbocompresor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Kit de juntas tóricas de la camisa del cilindro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Retén de árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Retén de diferencial',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Retén de la bomba de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Retén de la transmisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Retén de palier',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Retén del árbol intermedio',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Retén del buje de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Retén del cigueñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Retén del engranaje distribuidor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 48,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Retenes de válvulas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '21',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 49,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        
        // Escape

        DB::table('subcategories')->insert([
            'name' => 'Abrazadera de tubo de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aleta de gases de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Anillo de soporte, silenciador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de aire secundario',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Catalizador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cinta de goma de la línea de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Colas de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Colector de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Enfriador EGR',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de partículas (FAP)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Intercooler',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de montaje catalizado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de montaje silenciador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de colector de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de tubo de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta de válvula egr',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta del turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de montaje colector de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de sujeción del tubo de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Limpiador del filtro de partículas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Módulo dosificador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pieza de fijación para sistema de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Protector antitérmico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Reconversión euro1 / euro2 / d3',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión del turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión gas de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor, temp. gas escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Silenciador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Silenciador delantero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Silenciador intermedio',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sonda lambda (NOx, O2)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de tubo de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Transductor de presi´no',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de engrase del turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo flexible de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo intercooler',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de aire secundario',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de alivio',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula EGR',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '22',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Interior

        DB::table('subcategories')->insert([
            'name' => 'Alfombrillas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador de maletero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Antena',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de agua auxiliar',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombín de arranque',
            'avatar' => 'Bombín de cerradura',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Botón de bloqueo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Botón de freno de mano',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Botón de luces antiniebla',
            'avatar' => 'Botón de luces de emergencia',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Botonera de elevalunas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cable de velocímetro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cerradura',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cerradura guantera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cierre centralizado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cinturón de seguridad',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conmutador del pedal del embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conmutador en la columna de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Elevalunas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Espejo retrovisor interior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Iluminación del panel de instrumentos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de espejo retrovisor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de luz de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de marcha atras',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Lámpara de luz habitáculo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz de maletero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz de puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Maletero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Mando de luces',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manilla de puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manivela elevalunas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Motor del elevalunas eléctrico',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Muelle neumático, capota',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Muelle neumático, mesa abatible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Palanca de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pedal del acelerador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pedales y cubre pedales',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Portavasos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Regulador del asiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de intermitentes',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé del aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé multifunción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Resistencia de ventilador de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Revestimiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de ángulo de giro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de la temperatura interior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de lluvia',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura exterior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del pedal del acelerador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 48,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensores de aparcamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 49,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sistema eléctrico central',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 50,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control de la ventilación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 51,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control del aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 52,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Visera parasol',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '23',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 53,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Sistema de combustible

        DB::table('subcategories')->insert([
            'name' => 'Acumulador de presión de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Arandela del inyector',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Bisagra de depósito',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Bomba de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Bomba de combustible del interior del depósito',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Bomba inyectora',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Brida de carburador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Cable del acelerador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Caja del filtro de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Caudalímetro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Cuerpo de mariposa',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Depósito de combustible y tapa',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Elemento de ajuste de la mariposa',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Filtro de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Filtro de la bomba de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Herramientas para el sistema de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Inyectores',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Juego de reparación de bomba de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Junta de inyector',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Junta de la bomba de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Junta de la tubería de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Junta del aforador de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juntas de bomba inyectora',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de inyectores',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del carburador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Manguitos y tubería',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Pedal del acelerador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Piezas de carburador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Rampa de inyección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Regulador de presión de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Regulador de ralentí',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Relé de la bomba de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Sensor de detonación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de la presión del combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Sensor de nivel de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión, depósito de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del pedal de acelerador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor tps',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sistema de inyección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sonda lambda (NOx, O2)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de depósito de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Termostato, enriquecimiento arranque en frío',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de retorno de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control, mando del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de corte de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de ralentí (IAC)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de ventilación del depósito de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 48,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula del filtro de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '24',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 49,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Dirección

        DB::table('subcategories')->insert([
            'name' => 'Amortiguador de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Árbol de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Articulación de la columna de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Barra de acoplamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Barra de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bomba de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Brazo de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Casquillo de cremallera de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Columna de dirección + bomba de dirección eléctrica',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cremallera de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Depósito compensación de dirección asistida',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Elementos de transmisión de la dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro hidráulico de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Fuelle de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de reparación, cabeza de barra de acoplamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de juntas de la bomba hidráulica',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la rótula de la suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación, mecanismo dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Líquido de dirección asistida',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguera de dirección hidráulica',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Polea de bomba dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Presóstato aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Radiador del líquido de la dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rótula axial de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rótula de dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rótula de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de ángulo de giro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        
        DB::table('subcategories')->insert([
            'name' => 'Suspensión de la dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '25',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        //Embrague

        DB::table('subcategories')->insert([
            'name' => 'Bomba de embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombín de embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cable de embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Casquillo guía del embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinete de empuje',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conjinete de empuje central',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinete guía y arandela de empuje',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conmutador del pedal del embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Disco de embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Herramientas para embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Horquilla de embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de desembrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del cilindro receptor del embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Latiguillo de embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Limpiador de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pedales y cubre pedales',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Plato de presión de embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillo del volante de inercia',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Volante bimasa',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '26',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Palier y junta homocinética

        DB::table('subcategories')->insert([
            'name' => 'Cojinete intermedio del palier',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '27',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Fuelle palier',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '27',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta homocinética',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '27',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Palier',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '27',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén de palier',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '27',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tornillos de junta homocinética',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '27',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Trípode',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '27',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tuerca del muñón del eje',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '27',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Remolque / piezas adicionales

        DB::table('subcategories')->insert([
            'name' => 'Caballete del enganche del remolque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '28',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Enganche de bola de remolque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '28',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit eléctrico para remolque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '28',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de gancho remolque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '28',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Caja de cambios

        DB::table('subcategories')->insert([
            'name' => 'Aceite de transmisión y aceite de diferencial',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aceite para transmisión automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Apoyo del engranaje distribuidor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cable de caja de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cárter de caja automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinete de la caja de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro caja de cambios automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de marcha atras',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta, cárter aceite -transm. automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de cambio de aceite de caja automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la brida de la caja de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la palanca del cambio de marchas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit reparación de palanca de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Palanca de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piezas de caja de transfer',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Radiador de transmisión automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén de la transmisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de velocidad',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de caja de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de caja de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control de la caja de cambios automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de mando de la caja de cambios automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Volante bimasa',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '29',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Aire acondicionado

        DB::table('subcategories')->insert([
            'name' => 'Compresor de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Condensador de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Embrague del compresor del aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Evaporador de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de habitáculo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro deshidratador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Presostato de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Radiador de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé del aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé del electroventilador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Resistencia de ventilador de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de la temperatura interior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura exterior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor, calidad aire',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Servomotor de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubos de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control del aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de compresor de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de expansión de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Ventilador de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Ventilador del aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '30',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Rodamientos

        DB::table('subcategories')->insert([
            'name' => 'Apoyo del cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Casquillo guía del embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Casquillos de biela',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinete de accionamiento, alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinete de empuje',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinete de empuje central',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinete de la caja de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinete de la mangueta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinete intermedio del palier',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cojinetes del árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén del buje de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Rodamiento de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de cardán',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tapa de caja de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '31',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Arboles de transmision y diferenciales

        DB::table('subcategories')->insert([
            'name' => 'Aceite de transmisión y aceite de diferencial',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Aceite para transmisión automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Apoyo de engranaje distribuidor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Cardán',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Casquillo de centrado del eje longitudinal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Flector',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del diferencial',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piezas de caja de transfer',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piezas de diferencial',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén de diferencial',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Retén del engranaje distribuidor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Soporte de cardán',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '32',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        //Sensores, relés, unidades de control

        DB::table('subcategories')->insert([
            'name' => 'Anillo de sensor de abs',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Botón de luces de emergencia',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Botonera de elevalunas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Caudalímetro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Elevalunas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de luz de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Interruptor de marcha atras',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Motor regulador de faros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Presóstato aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Presóstato de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Regulador de presión de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Regulador del alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé bocina',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de calentadores',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de intermitentes',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de la bomba de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé de protección contra sobretensión de ABS',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé del aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé del electroventilador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé del motor de arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé del sistema de cierre centralizado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé limpiaparabrisas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé multifunción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé, calefacción de luneta trasera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Relé, sab',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Resistencia de ventilador de calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor ABS',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor agua, sistema combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de aceleración logitudinal / transversal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de ángulo de giro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 30,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 31,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de cigüeñal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 32,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de desgaste de pastillas de frenos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 33,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de detonación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 34,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de la presión del combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 35,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura interior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 36,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de nivel de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 37,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de nivel de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 38,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 39,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión de neumáticos (TPMS)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 40,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión del aire de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 41,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión del turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 42,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de presión gas de escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 43,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de recorrido del pedal',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 44,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 45,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura de aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 46,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del aire de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 47,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 48,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 49,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 50,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de temperatura exterior',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 51,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor de velocidad',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 52,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del nivel del líquido refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 53,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor del pedal del acelerador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 54,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor tps',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 55,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor, calidad aire',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 56,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor, luces xenón (regulación alcance luces)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 57,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor, nivel aua lavado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 58,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensor, temp. gas escape',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 59,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sensores de aparcamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 60,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Solenoide de arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 61,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Sonda lambda (NOx, O2)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 62,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Termostato, enriquecimiento arranque en frío',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 63,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Transductor de presión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 64,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Unidad de control de la caja de cambios automática',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 65,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Unidad de control de la iluminación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 66,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control de la ventilación',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 67,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control del abs / asr',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 68,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control del aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 69,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control del ventilador del radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 70,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control, cierre centralizado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 71,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Unidad de control, mando del motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 72,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de compresor de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 73,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de control del árbol de levas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 74,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula de corte de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 75,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Vávula de ralentí (IAC)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 76,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvulade regulación del aire de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '33',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 77,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Kits de reparación

        DB::table('subcategories')->insert([
            'name' => 'Juego de casquillos guía, pinza de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de reparación de bomba de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de reparación, ajuste automático',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juego de reparación, cilindro maestro del embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de accesorios de las zapatas de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de desembrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de juntas de la bomba hidráulica',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de montaje de la barra oscilante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de inyectores',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la barra de acoplamiento de la barra estabilizadora',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la bomba de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la brida de la caja de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la palanca del cambio de marchas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la rótula de la suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de la suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de pinzas de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación de bombín de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del brazo de suspensión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del carburador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del cilindro receptor del embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del diferencial',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación del distribuidor de encendido',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación, eje de freno de estacionamiento',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación, mecanismo dirección',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit de reparación, ventilación cárter',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Kit reparación de palanca de cambios',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 26,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piezas del motor de arranque',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 27,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Repuestos de alternador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 28,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Válvula, ventilación cárter',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '35',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 29,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Tuberías y mangueras

        DB::table('subcategories')->insert([
            'name' => 'Brida de refrigerante',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Conector de manguito de lavado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Junta anular, conducto aire admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Latiguillo de embrague',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Latiguillos de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguera de dirección hidráulica',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito de radiador',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito de ventilación del cárter',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito del aceite',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguito intercambiador de calor de la calefacción',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Manguitos y tubería',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubería de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de admisión',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de engrase del turbo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de retorno de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo de ventilación del depósito de combustible',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo flexible, ventilación del bloque motor',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubo intercooler',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubos de aire acondicionado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tubos de vacío',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '37',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Iluminación

        DB::table('subcategories')->insert([
            'name' => 'Bombilla antiniebla',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla de faro',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla de luz de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla intermitente',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombilla para luces de marcha atrás',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Bombillas traseras',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Faros',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Faros auxiliares',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Faros de carretera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Faros de xenón',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 10,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Iluminación del panel de instrumentos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 11,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Lámpara de luz de matrícula',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 12,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Lámpara de luz habitáculo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 13,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Lámpara para faros de carretera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 14,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luces antiniebla',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 15,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luces de estacionamiento y luz de posición',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 16,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luces de freno',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 17,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz antiniebla trasera',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 18,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz de maletero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 19,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);


        DB::table('subcategories')->insert([
            'name' => 'Luz de marcha atrás',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 20,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz de matrícula',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 21,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz de puerta',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 22,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Luz diurna (DRL)',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 23,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piloto intermitente',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 24,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Piloto trasero',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '39',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 25,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Tuning

        DB::table('subcategories')->insert([
            'name' => 'Chiptuning',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Discos de freno deportivos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Embrague reforzado',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Escape deportivo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Filtro de aire de alto flujo',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Parrilla deportiva',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pastillas de freno deportivas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 7,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Separadores de rueda',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 8,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Suspensión deportiva',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 9,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        // Sujeciones

        DB::table('subcategories')->insert([
            'name' => 'Abrazaderas',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Juntas tóricas universales',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Mangueras y tubos universales',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Pernos',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Remaches',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Tuerca',
            'avatar' => '',
            'user_id' => '2',
            'comercio_id' => '2',
            'category_id' => '40',
            'itemMenu' => '0',
            'itemSubmenu' => '1',
            'posicionMenu' => 1,
            'posicionSubmenu' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
    }
}
