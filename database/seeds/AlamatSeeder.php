<?php

use Illuminate\Database\Seeder;

class AlamatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            # code...
            DB::table('alamat')->insert([
                'pengusaha_id' => rand(1,15),
                'nama_jalan' => Str::random(20),
                'rt_rw' => rand(1,199).'/'.rand(1,199),
                'kelurahan' => Str::random(10),
                'kecamatan' => Str::random(10),
                'kota' => Str::random(10),
                'provinsi' => Str::random(15),
            ]);
        }
    }
}
