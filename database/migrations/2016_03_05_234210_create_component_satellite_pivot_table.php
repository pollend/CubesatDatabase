<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentSatellitePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_satellite', function (Blueprint $table) {
            $table->integer('satellite_id')->unsigned();
            $table->integer('component_id')->unsigned();
            $table->foreign('satellite_id')->references('id')->on('satellites')->onDelete('cascade');
            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('component_satellite');
    }
}
