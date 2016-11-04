<?php

use Illuminate\Database\Seeder;

class MissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		 factory(App\Mission::class, 50)->create()->each(function($u) {});
    }
}
