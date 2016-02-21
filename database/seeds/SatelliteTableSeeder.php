<?php

use Illuminate\Database\Seeder;

class SatelliteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		 factory(App\Satellite::class, 50)->create()->each(function($u) {});
    }
}
