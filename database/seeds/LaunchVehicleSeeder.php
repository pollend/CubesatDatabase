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
		factory(App\Models\LaunchVehicle::class, 50)->create()->each(function($launchVehicle) {
			factory(App\Models\Launch::class,20)->create([
				'launch_vehicle_id' => $launchVehicle->id
			]);
		});
    }
}
