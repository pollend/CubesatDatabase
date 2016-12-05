<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionFlatView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement( "CREATE VIEW mission_flat AS SELECT
        missions.id,
        missions.created_at,
        missions.updated_at,
        missions.objective,
        missions.wiki,
        missions.name,
        missions.organization_id,
        organizations.type AS organization_type,
        organizations.name AS organization_name
        FROM missions
          LEFT JOIN organizations ON  missions.organization_id = organizations.id
        " );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement( 'DROP VIEW mission_flat' );
    }
}
