<?php

use Illuminate\Database\Seeder;
use App\User\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User\User::class, 200)->create();
    }
}