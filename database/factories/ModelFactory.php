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

$factory->define(App\User\User::class,function (Faker\Generator $faker){
   return [
       'username' => $faker->unique()->userName,
       'email' => $faker->email,
       'password' =>  Hash::make("password")
   ];

});

$factory->define(App\Models\Organization::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'type' =>  $faker->randomElement(['University' ,'Military'])
    ];
});


$factory->define(App\Models\Address::class, function (Faker\Generator $faker) {
    return [
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => $faker->postcode
    ];
});

$factory->define(App\Models\Orbit::class, function (Faker\Generator $faker) {
    return [
        'tle' => $faker->word,
        'COSPAR' => $faker->word,
        'satcat' => $faker->word
    ];
});



$factory->define(App\Models\StreetAddress::class, function (Faker\Generator $faker) {
    return [
        'street' => $faker->streetName
    ];
});

$factory->define(App\Models\LaunchVehicle::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->isbn13
    ];
});

$factory->define(App\Models\Launch::class, function (Faker\Generator $faker) {
    return [
        'launch_date' => $faker->dateTimeThisYear($max = 'now')
    ];
});


$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Satellite::class, function (Faker\Generator $faker) {
    return [
		'name' => str_random(10),
		'content' => $faker->sentence($nbWords = 200, $variableNbWords = true),
		'wiki' => str_random(10),
        'mass' => $faker->randomFloat(NULL,2,10)
    ];
});


$factory->define(App\Models\SatelliteType::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(10)
    ];
});


$factory->define(App\Models\Spaceport::class, function (Faker\Generator $faker) {
    return [
        'latlong' => str_random(10),
        'url_website' => str_random(10),
        'description' => str_random(10)
    ];
});


$factory->define(App\Models\Component::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->sentence($nbWords = 200, $variableNbWords = true),
        'formal_specification' => str_random(10)
    ];
});


$factory->define(App\Models\Mission::class, function (Faker\Generator $faker) {
    return [
        'wiki' => str_random(10),
        'name' => str_random(10),
        'content' => str_random(10),
        'objective' => str_random(10)
    ];
});

$factory->define(App\Models\Vendor::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(10),
        'vendor_website' => str_random(10),
        'type' => str_random(10)
    ];
});


