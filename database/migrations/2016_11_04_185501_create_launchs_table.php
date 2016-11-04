<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaunchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('launches', function (Blueprint $table) {
            $table->integer('satellite_id')->unsigned()->unique();
            $table->integer('launch_vehicle_id')->unsigned();
            $table->timestamps();
            $table->date("launch_date");

            $table->foreign('satellite_id')->references('id')->on('satellites');
            $table->foreign('launch_vehicle_id')->references('id')->on('launch_vehicles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('launches');
    }
}
