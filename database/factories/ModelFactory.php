<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Satellite::class, function (Faker\Generator $faker) {
    return [
		'name' => str_random(10),
		'content' => str_random(100),
		'COSPAR' => str_random(10),
		'wiki' => str_random(10),
		'status' => str_random(10),
		'tle' => str_random(10),
		'orbit' => str_random(10)
    ];
});
