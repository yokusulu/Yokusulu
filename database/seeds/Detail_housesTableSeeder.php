<?php

use Illuminate\Database\Seeder;

class Detail_housesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
 	{
 		factory(App\Detail_house::class, 10)->create();
 	}
}
