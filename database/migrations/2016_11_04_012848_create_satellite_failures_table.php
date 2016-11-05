<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatelliteFailuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satellite_failures', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->binary("content");
            $table->dateTime("time_of_failure");
            $table->integer("satellite_id")->unsigned();

            $table->foreign('satellite_id')->references('id')->on('satellites');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('satellite_failures');
    }
}
