<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatelliteFlatView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement( "CREATE VIEW satellite_flat AS SELECT
        satellites.created_at,
        satellites.updated_at,
        missions.name as mission_name,
        organizations.id as organization_id,
        organizations.name as organization_name,
        satellite_types.name as satellite_type,
        satellites.name,
        satellites.COSPAR,
        satellites.wiki,
        satellites.mass,
        satellites.id,
        satellites.mission_id,
        satellites.satellite_type_id,
        satellites.orbit_id,
        satellites.launch_id,
        launches.launch_date,
        launch_vehicles.name as launch_vehicle
        FROM satellites
          LEFT JOIN missions ON  satellites.mission_id = missions.id
          LEFT JOIN organizations ON missions.organization_id = organizations.id
          LEFT JOIN satellite_types ON satellites.satellite_type_id = satellite_types.id
          LEFT JOIN launches ON satellites.launch_id = launches.id
          LEFT JOIN launch_vehicles ON launches.launch_vehicle_id = launch_vehicles.id
        " );
    }

    /**
     * Reverse the migrations.
        *
     * @return void
     */
    public function down()
    {
        DB::statement( 'DROP VIEW satellite_flat' );
    }
}
