<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatelliteFailureStates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satellite_failure_component_refrences', function (Blueprint $table) {
            $table->integer('satellite_failure_id')->unsigned();
            $table->integer('component_id')->unsigned();

            $table->foreign('satellite_failure_id')->references('id')->on('satellite_failure_states');
            $table->foreign('component_id')->references('id')->on('components');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('satellite_failure_component_refrence');
    }
}
