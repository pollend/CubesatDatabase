<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatellitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satellites', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("name");
            $table->binary("content");
            $table->string("COSPAR");
            $table->string("wiki");
            $table->float("weight");

            $table->integer("mission_id")->unsigned();
            $table->integer("satellite_type_id")->unsigned();
            $table->integer("satellite_orbit_id")->unsigned();

            $table->foreign('satellite_type_id')->references('id')->on('satellite_types');
            $table->foreign('mission_id')->references('id')->on('missions');
            $table->foreign('satellite_orbit_id')->references('id')->on('orbits');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('satellites');
    }
}
