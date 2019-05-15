<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Ad;
use Faker\Generator as Faker;

$factory->define(Ad::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'img' => $faker->word()
    ];
});
