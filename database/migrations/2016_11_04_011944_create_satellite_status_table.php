<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatelliteStatusTable extends Migration
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
            $table->enum("status",array("active","in-orbit","in-development","data-collection","data-analysis","inactive","de-orbited","entry-closed"));
            $table->date("time");

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
