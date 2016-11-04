<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatellitesImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satellites_images', function (Blueprint $table) {
            $table->integer('satellite_id')->unsigned();
            $table->integer('image_id')->unsigned();

            $table->foreign('satellite_id')->references('id')->on('satellites');
            $table->foreign('image_id')->references('id')->on('images');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('satellites_images');
    }
}
