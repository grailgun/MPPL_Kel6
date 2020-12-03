<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengusahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengusaha', function (Blueprint $table) {
            $table->id();
            $table->boolean('confirmed') -> default(false);

            $table->string('nama_toko');
            $table->string('nama_pemilik');
            $table->string('foto_toko')->nullable();
            $table->string('nomor_telepon');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengusaha');
    }
}
