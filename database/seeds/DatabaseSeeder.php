<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed satellite table
        $this->call(OrganizationTableSeeder::class);
        $this->call(VendorTableSeeder::class);
        $this->call(SpaceportTableSeeder::class);
        $this->call(LaunchVehicleSeeder::class);
        $this->call(SatelliteTableSeeder::class);

    }
}
