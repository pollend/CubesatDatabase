<?php

use Illuminate\Database\Seeder;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\Models\Address::class, 25)->create()->each(function($address) {
		    factory(App\Models\Vendor::class, 1)->create(['address_id' => $address->id])->each(function($vendor) {
		    	factory(App\Models\Component::class,20)->create(['vendor_id'=>$vendor->id]);
		    });
		});

    }
}
