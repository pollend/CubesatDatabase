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
            $table->increments('id');
            $table->integer('launch_vehicle_id')->unsigned()->nullable();
            $table->timestamps();
            $table->date("launch_date");

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
