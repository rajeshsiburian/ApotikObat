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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\modelObat::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'harga' => $faker->numberBetween($min = 5000, $max = 200000),
        'stok' => $faker->numberBetween($min = 200, $max = 1000),
        'expired_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'production_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
