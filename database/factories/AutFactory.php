<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\aut;
use Faker\Generator as Faker;

$factory->define(aut::class, function (Faker $faker) {
    return [
        'name'=>$faker->city,
        'age'=>$faker->numberBetween(20,40),
        'exp'=>$faker->RandomDigitNotNull,
    ];
});
