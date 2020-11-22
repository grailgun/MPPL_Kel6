<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengusaha extends Model
{
    //
    protected $fillable = [
        'nama_toko', 'nama_pemilik', 'foto_toko', 'nomor_telepon'
    ];

    public function Alamat()
    {
        return $this->hasMany('App\Alamat');
    }

    public function Portofolio()
    {
        return $this->hasMany('App\Portofolio');
    }

    public function Produk()
    {
        return $this->hasMany('App\Produk');
    }
}
