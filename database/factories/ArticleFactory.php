<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'ingress' => $faker->realText($maxNbChars = 150, $indexSize = 2),
        'text' => $faker->realText($maxNbChars = 300, $indexSize = 2),
        'category_id' => $faker->numberBetween($min = 0, $max = 4),
        'rank' => $faker->numberBetween($min = 1, $max = 5),
        'extra' => $faker->boolean($chanceOfGettingTrue = 30)
    ];
});

