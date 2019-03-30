<?php

use Faker\Generator as Faker;

$factory->define(App\House_image::class, function (Faker $faker) {
	$houseIDs  = App\House::pluck('id')->all();
    return [
		'houses_id' => $faker->randomElement($houseIDs),
		'images' => $faker->image(),
		'updated_at' => $faker->dateTime('now'),
		'created_at' => $faker->dateTime('now'),
    ];
});
