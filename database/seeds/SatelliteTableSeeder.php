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

		 factory(App\Models\Satellite::class, 50)->create()->each(function($satellite) {
                $satellite->type()->associate(factory(App\Models\SatelliteType::class)->create())->save();
                $satellite->orbit()->associate(factory(App\Models\Orbit::class)->create())->save();
                $satellite->mission()->associate(App\Models\Mission::inRandomOrder()->first())->save();
                $satellite->launch()->associate(App\Models\Launch::inRandomOrder()->first())->save();
                $satellite->components()->attach(App\Models\Mission::inRandomOrder()->limit(5)->get());
            });
    }
}
