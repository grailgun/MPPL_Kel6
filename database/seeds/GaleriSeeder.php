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
        DB::table('galeri')->insert([
            'portofolio_id' => rand(1111, 9999),
            'gambar' => '1',
            'deskripsi_gambar' => Str::random(30),
        ]);
    }
}
