<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    $name = $faker->unique()->country;

    return [
        'name' => $name,
    ];
});
