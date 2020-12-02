<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $fillable = [
        'nama_jalan', 'rt_rw', 'kelurahan', 'kecamatan', 'kota', 'provinsi'
    ];

    public function Pengusaha()
    {
        return $this->belongsTo('App\Pengusaha');
    }
}
