<?php

use Illuminate\Database\Seeder;

class Host_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		factory(App\Host_user::class, 10)->create();
	}
}
