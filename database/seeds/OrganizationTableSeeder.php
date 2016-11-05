<?php

use Illuminate\Database\Seeder;

class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\Address::class, 25)->create()->each(function($address) {
		    factory(App\Organization::class)->create(['address_id' => $address->id])->each(function($organization) {
		    	factory(App\Mission::class,5)->create(['organization_id'=>$organization->id]);
		    });
		});

    }
}
