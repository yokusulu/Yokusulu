<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(UsersTableSeeder::class);
		$this->call(Host_usersTableSeeder::class);
		$this->call(Super_usersTableSeeder::class);
		$this->call(HousesTableSeeder::class);
		$this->call(Detail_housesTableSeeder::class);
		$this->call(Disable_booking_datesTableSeeder::class);
		$this->call(House_imagesTableSeeder::class);
		$this->call(BookingsTableSeeder::class);
	}
}
