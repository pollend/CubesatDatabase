<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserOwnershipTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('user_mission_ownership', function (Blueprint $table) {
            $table->integer('mission_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('ownership');

            $table->foreign('mission_id')->references('id')->on('missions');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('user_vendor_ownership', function (Blueprint $table) {
            $table->integer('vendor_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('ownership');

            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->foreign('user_id')->references('id')->on('users');
        });

         Schema::create('user_spaceport_ownership', function (Blueprint $table) {
            $table->integer('spaceport_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('ownership');

            $table->foreign('spaceport_id')->references('id')->on('spaceports');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_mission_ownership');
        Schema::drop('user_vendor_ownership');
        Schema::drop('user_spaceport_ownership');
    }
}
