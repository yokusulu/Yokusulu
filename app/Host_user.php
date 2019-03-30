<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host_user extends Model
{
    protected $fillable = [
		"id",
		"users_id",
		"phone",
		"zip",
		"prefecture",
		"city",
		"ward",
		"address",
		"del_flg",
    ];

    public function user () {
    	return $this->belongsTo("App\User", "users_id");
    }
}
