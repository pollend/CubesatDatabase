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
        Schema::create('spaceports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("latlong");
            $table->string("url_website");
            $table->string("description");
            $table->string("url_googlemap");
            $table->string("address1");
            $table->string("address2");
            $table->string("name");
            $table->string("state");
            $table->string("country");
            $table->string("city");
            $table->string("zip");
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
