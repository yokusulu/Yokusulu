<?php
use Faker\Generator as Faker;

$factory->define(App\Disable_booking_date::class, function (Faker $faker) {
	$houseIDs  = App\House::pluck('id')->all();
	$year = "2018";
	$month = [
			"1",
			"2",
			"3",
	];
	$day = "1";
	return [
		'houses_id' => $faker->randomElement($houseIDs),
		'year' => $year,
		'month' => $faker->randomElement($month),
		'day' => $day,
	];
});
