<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Year;
use Faker\Generator as Faker;

$factory->define(Year::class, function (Faker $faker) {
    $year = $faker->unique()->year;

    return [
        'year' => $year,
    ];
});
