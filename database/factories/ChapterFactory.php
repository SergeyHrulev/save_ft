<?php

use Faker\Generator as Faker;

$factory->define(App\Chapter::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'title' => $faker->word,
    ];
});
