<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisableBookingDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disable_booking_dates', function (Blueprint $table) {
            $table->increments('id')->nullable(false);
            $table->unsignedInteger('houses_id')->nullable(false);
            $table->smallInteger('year')->nullable(false);
            $table->smallInteger('month')->nullable(false);
            $table->smallInteger('day')->nullable(false);
            $table->foreign('houses_id')->references('id')->on('houses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disable_booking_dates');
    }
}
