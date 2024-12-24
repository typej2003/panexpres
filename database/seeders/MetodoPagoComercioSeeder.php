<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodoPagoComercioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metodo_pago_c_s')->insert([
            'comercio_id' => '1',
            'metodo' => 'transferencia',
            'banco' => 'BANCO DE VENEZUELA',
            'codigo' => '0102',
            'tipocuenta' => 'cuenta', // view or categories
            'nrocuenta' => '01028888889999999999',
            'titular' => 'Jose Rosales',
            'identificationNac' => 'V',
            'identificationNumber' => '13053081',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('metodo_pago_c_s')->insert([
            'comercio_id' => '1',
            'metodo' => 'pagomovil',
            'banco' => 'BANCO DE VENEZUELA',
            'codigo' => '0102',
            'identificationNac' => 'V',
            'identificationNumber' => '13053081',
            'cellphonecode' => '0416',
            'cellphone' => '5800403',            
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('metodo_pago_c_s')->insert([
            'comercio_id' => '1',
            'metodo' => 'pagoonline',
            'identificationNac' => 'V',
            'identificationNumber' => '13053081',
            'cellphonecode' => '0416',
            'cellphone' => '5800403',
            'pagoonline' => 'zelle',
            'email' => 'typej2003@gmail.com',            
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
    }
}
