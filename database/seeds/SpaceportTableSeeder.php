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
        factory(App\Spaceport::class, 50)->create()->each(function($u) {});
    }
}
