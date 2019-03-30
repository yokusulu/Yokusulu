<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookings', function (Blueprint $table) {
			$table->increments('id')->nullable(false);
			$table->unsignedInteger('houses_id')->nullable(false);
			$table->unsignedInteger('users_id')->nullable(false);
			$table->integer('price')->nullable(false);
			$table->boolean('del_flg')->default(0);
			$table->date('rent_start_date')->nullable(false);
			$table->date('rent_end_date')->nullable(false);
			$table->timestamps();
			$table->foreign('houses_id')->references('id')->on('houses');
			$table->foreign('users_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('bookings');
	}
}
