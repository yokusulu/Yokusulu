<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_house extends Model
{
	protected $fillable = [
		"id",
		"houses_id",
		"description",
		"del_flg",
	];

	public function house () {
		return $this->belongsTo("App\House", "houses_id");
	}
}
