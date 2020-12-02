<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PortofolioSeeder extends Seeder
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
            DB::table('portofolio')->insert([
                'pengusaha_id' => rand(1,15),
                'deskripsi' => Str::random(40),
                'kelebihan' => Str::random(20),
                'kekurangan' => Str::random(20),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
        
    }
}
