<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatellitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satellites', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("name");
            $table->binary("content");
            $table->string("COSPAR");
            $table->string("wiki");
            $table->integer("mission_id")->unsigned();

            $table->foreign('mission_id')->references('id')->on('missions');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('satellites');
    }
}
