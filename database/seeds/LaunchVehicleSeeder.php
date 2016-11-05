<?php

use Illuminate\Database\Seeder;

class LaunchVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\LaunchVehicle::class, 50)->create()->each(function($launchVehicle) {
			factory(App\Launch::class,20)->create([
				'launch_vehicle_id' => $launchVehicle->id
			]);
		});
    }
}
