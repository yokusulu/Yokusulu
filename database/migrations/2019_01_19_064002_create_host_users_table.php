<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('host_users', function (Blueprint $table) {
            $table->increments('id')->nullable(false);
            $table->unsignedInteger('users_id')->nullable(false);
            $table->string('phone', 11)->nullable(false);
            $table->string('zip', 7)->nullable(false);
            $table->string('prefecture', 10)->nullable(false);
            $table->string('city', 30)->nullable(false);
            $table->string('ward', 30)->nullable(false);
            $table->string('address', 30)->nullable(false);
            $table->boolean('del_flg')->default(0);
            $table->timestamps();
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
        Schema::dropIfExists('host_users');
    }
}
