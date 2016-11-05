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

		 factory(App\Satellite::class, 50)->create()->each(function($satellite) {
                $satellite->type()->associate(factory(App\SatelliteType::class)->create())->save();
                $satellite->orbit()->associate(factory(App\Orbit::class)->create())->save();
                $satellite->mission()->associate(App\Mission::inRandomOrder()->first())->save();
                $satellite->launch()->associate(App\Launch::inRandomOrder()->first())->save();
                $satellite->components()->attach(App\Mission::inRandomOrder()->limit(5)->get());
            });
    }
}
