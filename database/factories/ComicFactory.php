<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comic;
use Faker\Generator as Faker;

$factory->define(Comic::class, function (Faker $faker) {
    return [
        'title' => $faker->words(5, true),
        'author' => $faker->name(),
        'relese_date' => $faker->date(),
        'pages' => $faker->numberBetween(100, 400)
    ];
});
