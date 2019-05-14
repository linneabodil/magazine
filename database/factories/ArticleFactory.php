<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'text' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'category_id' => $faker->numberBetween($min = 1, $max = 5),
        'rank' => $faker->numberBetween($min = 1, $max = 5),
        'extra' => $faker->boolean($chanceOfGettingTrue = 30)
    ];
});


// hej