<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpaceportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaceport', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("latlong");
            $table->string("url_website");
            $table->binary("description");
            $table->integer("address_id")->unsigned();
            $table->foreign('address_id')->references('id')->on('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('spaceports');
    }
}
