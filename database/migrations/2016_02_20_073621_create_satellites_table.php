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
            $table->binary("content")->nullable();
            $table->string("COSPAR")->nullable();
            $table->string("wiki")->nullable();
            $table->float("mass")->nullable();

            $table->integer("mission_id")->unsigned()->nullable();
            $table->integer("satellite_type_id")->unsigned()->nullable();
            $table->integer("orbit_id")->unsigned()->nullable();
            $table->integer("launch_id")->unsigned()->nullable();

            $table->foreign('satellite_type_id')->references('id')->on('satellite_types');
            $table->foreign('mission_id')->references('id')->on('missions');
            $table->foreign('orbit_id')->references('id')->on('orbits');
            $table->foreign('launch_id')->references('id')->on('launches');
            
            
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
