<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk', 'deskripsi_produk', 'harga_produk'
    ];

    public function Pengusaha()
    {
        return $this->belongsTo('App\Pengusaha');
    }
}
