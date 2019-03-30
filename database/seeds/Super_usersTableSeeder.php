<?php

use Illuminate\Database\Seeder;

class Super_usersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(App\Super_user::class, 10)->create();
	}
}
