<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorSpaceportPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_spaceports', function (Blueprint $table) {
            $table->integer('vendor_id')->unsigned();
            $table->integer('spaceport_id')->unsigned();
            
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->foreign('spaceport_id')->references('id')->on('spaceports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('vendor_spaceport');
    }
}
