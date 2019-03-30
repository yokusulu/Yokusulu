<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disable_booking_date extends Model
{
	public $timestamps = false;
	public $fillable = [
		"id",
		"houses_id",
		"year",
		"month",
		"day",
	];
	public function house () {
		return $this->belongsTo("App\House", "houses_id");
	}
}
