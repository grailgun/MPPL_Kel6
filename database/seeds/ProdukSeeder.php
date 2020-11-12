<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            'pengusaha_id' => rand(111111, 999999), // temporary; will get pengusaha's id with Eloquent ORM
            'nama_produk' => Str::random(10),
            'deskripsi_produk' => Str::random(30),
            'harga_produk' => rand(10000, 10000),  
        ]);
    }
}
