<?php
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Host_user::class, function (Faker $faker) {
	$userIDs  = App\User::pluck('id')->all();
	$phone = str_replace('-', '', $faker->phoneNumber());
	$city = [
			"北区",
			"西区",
			"東区",
			"南区",
	];
	$disables = [
			0,
			1
	];
	$carbon = new Carbon();
	return [
		'users_id'    =>     $faker->randomElement($userIDs),
		'phone'   =>     $phone,
		'zip'   =>  $faker->randomNumber(7),
		'prefecture'     => "東京都",
		'city'     => $faker->randomElement($city),
		'ward'     => "テスト町",
		'address'     => "1-1-1",
		'del_flg'     => $faker->randomElement($disables),
		'created_at' =>  $carbon->now(),
		'updated_at' =>  $carbon->now(),
	];
});
