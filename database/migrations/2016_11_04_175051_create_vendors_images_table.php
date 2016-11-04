<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors_images', function (Blueprint $table) {
            $table->integer('vendor_id')->unsigned();
            $table->integer('image_id')->unsigned();

            $table->foreign('vendor_id')->references('id')->on('vendors');
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
        Schema::drop('vendors_images');
    }
}
