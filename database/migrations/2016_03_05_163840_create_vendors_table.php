<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("name");
            $table->string("vendor_website");
            $table->integer("address_id")->unsigned();
            $table->string("type");
            
            $table->foreign('address_id')->references('id')->on('addresses');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('vendors');
    }
}
