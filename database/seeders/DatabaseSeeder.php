<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            User2Seeder::class,
            BancoSeeder::class,
            SettingsSeeder::class,
            MetodoPagoSeeder::class,
            AreaSeeder::class,
            ComercioSeeder::class,
            SettingComercioSeeder::class,
            ImpuestoSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            SupplierSeeder::class,
            ManufacturersSeeder::class,
            BrandSeeder::class,
            ModeloSeeder::class,
            MotorSeeder::class,
            ContainerSeeder::class,
            ProductsSeeder::class,
            Products2Seeder::class,
            //Products3Seeder::class,
            MenuSeeder::class,
            MetodoPagoComercioSeeder::class,
        ]);
    }
}
