<?php

use Illuminate\Database\Seeder;
use App\Models\Address;

class SpaceportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         factory(App\Models\Address::class, 25)->create()->each(function($address) {
            factory(App\Models\Spaceport::class, 1)->create(
            ['address_id' => $address->id]
                )->each(function($spaceport) {
            });
         });


    }
}
