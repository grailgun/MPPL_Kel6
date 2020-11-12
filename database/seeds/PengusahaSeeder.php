<?php

use Illuminate\Database\Seeder;

class PengusahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengusaha')->insert([
            'nama_toko' => 'Sablon '.Str::random(10),
            'nama_pemilik' => Str::random(10), 
            'foto_toko' => '1',
            'nomor_telepon' => '0812345678',
        ]);
    }
}
