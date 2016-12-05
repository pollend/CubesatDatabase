<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatelliteStatusPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satellite_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("status");
            $table->date("time");
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
        Schema::drop('satellite_statuses');
    }
}
