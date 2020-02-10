<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Show::class, function (Faker $faker) {
    return [
        'show_name' => $faker->word,
        'genre' => $faker->randomElement($array = array ('Comedy','Drama','Romance', 'Action', 'Adventure')),
        'imdb_rating' => $faker->randomDigit,
        'lead_actor' => $faker->name
    ];
});
