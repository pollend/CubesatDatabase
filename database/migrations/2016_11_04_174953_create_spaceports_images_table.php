<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpaceportsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaceports_images', function (Blueprint $table) {
            $table->integer('spaceport_id')->unsigned();
            $table->integer('image_id')->unsigned();

            $table->foreign('spaceport_id')->references('id')->on('spaceports');
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
        Schema::drop('spaceports_images');
    }
}
