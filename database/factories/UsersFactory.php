<?php
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
	$names = [
			"nagahara",
			"hayashi",
			"nakamura",
			"yazima"
	];
	$emails = [
			"test1@gmail.com",
			"test2@gmail.com",
			"test3@gmail.com"
	];
	$disables = [
			0,
			1
	];
	$carbon = new Carbon();
	return [
		'name'    =>     $faker->randomElement($names),
		'email'   =>     $faker->randomElement($emails),
		'password'   =>  Hash::make($faker->password()),
		'del_flg'     => $faker->randomElement($disables),
		'created_at' =>  $carbon->now(),
		'updated_at' =>  $carbon->now(),
		];
});
