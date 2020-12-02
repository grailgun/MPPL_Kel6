<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';

    protected $fillable = [
        'deskripsi', 'kelebihan', 'kekurangan'
    ];

    public function Galeries()
    {
        return $this->hasMany('App\Galeri');
    }
}
