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
        Schema::create('satellites_components', function (Blueprint $table) {
            $table->integer('satellite_id')->unsigned();
            $table->integer('component_id')->unsigned();
            $table->foreign('satellite_id')->references('id')->on('satellites');
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
        Schema::drop('satellites_components');
    }
}
