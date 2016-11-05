<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatelliteFailureComponentPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satellite_failure_component', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer("satellite_failure_id")->unsigned();
            $table->integer("component_id")->unsigned();
            $table->binary("comments");

             $table->foreign('satellite_failure_id')->references('id')->on('satellite_failures');
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
        Schema::drop('satellite_failure_component');
    }
}
