<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengusaha extends Model
{
    protected $table = 'pengusaha';
    //
    protected $fillable = [
        'nama_toko', 'nama_pemilik', 'nomor_telepon', 'foto_toko'
    ];

    protected $hidden = [
        'confirmed'
    ];

    public function Alamat()
    {
        return $this->hasMany('App\Alamat');
    }

    public function Portofolio()
    {
        return $this->hasOne('App\Portofolio');
    }

    public function Produk()
    {
        return $this->hasMany('App\Produk');
    }
}
