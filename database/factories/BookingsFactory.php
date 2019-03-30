<?php
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Booking::class, function (Faker $faker) {
	$carbon = new Carbon();
	$house_ids  = App\House::pluck('id')->all();
	$user_ids  = App\User::pluck('id')->all();

	return [
		'houses_id'    =>     $faker->randomElement($house_ids),
		'users_id'    =>     $faker->randomElement($user_ids),
		'price'     => "10000",
		'del_flg'     => 0,
		'rent_start_date' =>  new Carbon('2018-01-01'),
		'rent_end_date' =>  new Carbon('2018-02-01'),
		'created_at' =>  $carbon->now(),
		'updated_at' =>  $carbon->now(),
	];
});
