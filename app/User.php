<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // protected $with = ['host_user'];

    public function host_user () {
        return $this->hasOne("App\Host_user", "users_id");
    }

    public function house () {
        return $this->hasOne("App\House", "users_id");
    }
}
