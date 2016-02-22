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
            $table->enum("status",array("active","in-orbit","in-development","data-collection","data-analysis","inactive","de-orbited","entry-closed"));
            $table->string("tle");
            $table->string("orbit");
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
