<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComponentThumbnailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_thumbnail', function (Blueprint $table) {
            $table->integer('component_id')->unsigned();
            $table->integer('image_id')->unsigned();

            $table->foreign('component_id')->references('id')->on('components');
            $table->foreign('image_id')->references('id')->on('images');
        });

        Schema::table('components', function ($table) {
            $table->integer('main_thumbnail_image_id')->unsigned()->nullable();
            $table->foreign('main_thumbnail_image_id')->references('id')->on('images');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('component_thumbnail');

        Schema::table('components', function($table)
        {
            $table->dropForeign('components_main_thumbnail_image_id_foreign');
            $table->dropColumn(['main_thumbnail_image_id']);
        });
    }
}
