<?php

use Illuminate\Database\Seeder;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		 factory(App\Component::class, 50)->create()->each(function($u) {});
    }
}
