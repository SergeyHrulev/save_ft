<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(App\Articles::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'title' => $faker->sentence,
        'subtitle' => $faker->paragraph,
        'text' => $faker->text(500),
        'img' => asset('img/temp/art-1.jpg'),
        'preview' => asset('img/temp/art-1.jpg'),
        'alt' => Str::random(10),
        'img_title' => Str::random(10),
        'published' => 1
    ];
});
