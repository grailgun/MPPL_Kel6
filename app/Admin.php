<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticable
{
    use Notifiable;

    protected $table = 'admin';

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'username', 'password'
    ];

    protected $hidden = ['password'];
}
