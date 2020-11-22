<?php

use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            # code...
            DB::table('galeri')->insert([
                'portofolio_id' => rand(1, 15),
                'gambar' => '1',
                'deskripsi_gambar' => Str::random(30),
            ]);
        }
        
    }
}
