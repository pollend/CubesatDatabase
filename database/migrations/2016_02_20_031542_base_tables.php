<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('communications', function (Blueprint $table) {
            $table->string('xmit');
            $table->string('rcv');
            $table->string('xcvr');
        });

      Schema::create('data', function (Blueprint $table) {
            $table->float('radio_frequency');
            $table->float('bandwidth');
            $table->string('format');
             $table->string('description');
              $table->string('access');
        });

       Schema::create('history', function (Blueprint $table) {
            $table->increments('history_id');
            $table->dateTime('date');
            $table->integer('user_id');
             $table->string('table');
              $table->integer('item_id');
              $table->text('data');
        });

         Schema::create('instrumentation', function (Blueprint $table) {
            $table->string('cameras');
            $table->string('telescopes');
        });

         Schema::create('mission', function (Blueprint $table) {
            $table->increments('mission_id');
            $table->string('objective');
            $table->string('wiki');
            $table->string('name');
            $table->string('content');
        });

        Schema::create('part', function (Blueprint $table) {
            $table->increments('part_id');
            $table->string('description');
            $table->string('formal_specification');
        });

        Schema::create('relation_part_vendor', function (Blueprint $table) {
            $table->increments('relation_part_id');
            $table->integer('part_id');
            $table->integer('vendor_id');
            $table->string('vendor_catalog_entry');
            $table->string('vendor_model_number');
        });

         Schema::create('property', function (Blueprint $table) {
            $table->string('id');
            $table->string('value');
        });

         Schema::create('relation_groups', function (Blueprint $table) {
            $table->integer('group_id');
            $table->string('type_id');
            $table->integer('entry_id');
        });

          Schema::create('relation_mission_sat', function (Blueprint $table) {
            $table->integer('mission_id');
            $table->integer('sat_id');
        });

        Schema::create('relation_satellite_part', function (Blueprint $table)
        {
            $table->integer('sat_id');
            $table->integer('part_id');
        });

          Schema::create('relation_teams_sats', function (Blueprint $table)
        {
            $table->integer('team_id');
            $table->integer('sat_id');
        });

        Schema::create('relation_teams_users', function (Blueprint $table)
        {
            $table->integer('team_id');
            $table->integer('user_id');
        });

        Schema::create('relation_teams_mission', function (Blueprint $table)
        {
            $table->integer('team_id');
            $table->integer('mission_id');
        });

        Schema::create('relation_vendor_part', function (Blueprint $table)
        {
            $table->integer('vendor_id');
            $table->integer('part_id');
        });

        Schema::create('satellite', function (Blueprint $table)
        {
            $table->increments('sat_id');
            $table->string("name");
            $table->string("content");
            $table->string("COSPAR");
            $table->string("wiki");
            $table->string("status");
            $table->string("tle");
            $table->string("orbit");
        });

        Schema::create('spaceport', function (Blueprint $table)
        {
            $table->increments('spaceport_id');
            $table->string("latlong");
            $table->string("url");
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

        Schema::create('team', function (Blueprint $table)
        {
            $table->increments('team_id');
            $table->string("name");
            $table->string("latlong");
        });

        Schema::create('vendor', function (Blueprint $table)
        {
            $table->increments('vendor_id');
            $table->string("name");
            $table->string("latlong");
            $table->string("url");
            $table->string("contact_info");
            $table->string("type");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('communications');
        Schema::drop('data');
        Schema::drop('history');
        Schema::drop('instrumentation');
        Schema::drop('mission');
        Schema::drop('part');
        Schema::drop('relation_part_vendor');
        Schema::drop('property');
        Schema::drop('relation_groups');
        Schema::drop('relation_mission_sat');
        Schema::drop('relation_satellite_part');
        Schema::drop('relation_teams_sats');
        Schema::drop('relation_teams_users');
        Schema::drop('relation_teams_mission');
        Schema::drop('relation_vendor_part');
        Schema::drop('satellite');
        Schema::drop('spaceport');
        Schema::drop('team');
        Schema::drop('vendor');

    }
}
