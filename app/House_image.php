<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House_image extends Model
{
    protected $fillable = [
		"id",
		"houses_id",
		"images",
    ];

	public function house () {
		return $this->belongsTo("App\House", "houses_id");
	}
}
