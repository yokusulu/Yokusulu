<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
	protected $fillable = [
		"id",
		"name",
		"users_id",
		"zip",
		"prefecture",
		"city",
		"ward",
		"address",
		"price",
		"del_flg",
		"rent_start_date",
		"rent_end_date",
	];

	public function detailHouse () {
		return $this->hasOne("App\Detail_house", "houses_id");
	}

	public function houseImage () {
		return $this->hasOne("App\House_image", "houses_id");
	}
}
