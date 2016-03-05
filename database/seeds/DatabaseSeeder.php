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
        $this->call(SatelliteTableSeeder::class);
        $this->call(SpaceportTableSeeder::class);
        $this->call(ComponentTableSeeder::class);
        $this->call(MissionTableSeeder::class);
         $this->call(VendorTableSeeder::class);
    }
}
