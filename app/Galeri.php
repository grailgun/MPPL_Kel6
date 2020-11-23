<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';

    protected $fillable = [
        'gambar', 'deskripsi_gambar'
    ];

    public function Portofolio()
    {
        return $this->belongsTo('App\Portofolio');
    }
}
