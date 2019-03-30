<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	protected $fillable = [
		"id",
		"houses_id",
		"users_id",
		"price",
		"del_flg",
		"rent_start_date",
		"rent_end_date",
		];
}
