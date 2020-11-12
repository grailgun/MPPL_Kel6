<?php

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
        $this->call(AlamatSeeder::class);
        $this->call(GaleriSeeder::class);
        $this->call(PengusahaSeeder::class);
        $this->call(PortofolioSeeder::class);
        $this->call(ProdukSeeder::class);
    }
}
