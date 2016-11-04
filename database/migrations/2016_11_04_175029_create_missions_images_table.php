<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions_images', function (Blueprint $table) {
            $table->integer('mission_id')->unsigned();
            $table->integer('image_id')->unsigned();

            $table->foreign('mission_id')->references('id')->on('missions');
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
        Schema::drop('missions_images');
    }
}
