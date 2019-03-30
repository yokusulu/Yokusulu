<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_houses', function (Blueprint $table) {
            $table->increments('id')->nullable(false);
            $table->unsignedInteger('houses_id')->nullable(false);
            $table->text('description')->nullable();
            $table->boolean('del_flg')->default(0);
            $table->timestamps();
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
        Schema::dropIfExists('detail_houses');
    }
}
