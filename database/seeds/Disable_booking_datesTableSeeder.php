<?php

use Illuminate\Database\Seeder;

class Disable_booking_datesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $timestamps = false;
    public function run()
    {
		factory(App\Disable_booking_date::class, 10)->create();
    }
}
