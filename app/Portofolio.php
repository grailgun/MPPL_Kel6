<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';

    protected $fillable = [
        'deskripsi', 'kelebihan', 'kekurangan'
    ];

    public function Pengusaha(){
        return $this->belongsTo('App\Pengusaha');
    }

    public function Galeries()
    {
        return $this->hasMany('App\Galeri');
    }
}
