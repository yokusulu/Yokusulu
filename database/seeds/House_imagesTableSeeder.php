<?php

use Illuminate\Database\Seeder;

class House_imagesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(App\House_image::class, 10)->create();
	}
}
