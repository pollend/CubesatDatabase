<?php

use Illuminate\Database\Seeder;

class SpaceportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Spaceport::class, 10)->create()->each(function($spaceport) {
        	factory(App\Vendor::class, 5)->create()->each(function($vendor) use ($spaceport) {
        		 $vendor->vendors()->attach($spaceport->id);
        	});
        });
    }
}
