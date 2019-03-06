<?php

use Faker\Generator as Faker;

$factory->define(App\Events::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'title' => $faker->sentence,
        'subtitle' => $faker->paragraph,
        'text' => $faker->text(500),
        'img' => asset('img/temp/event-1.jpg'),
        'preview' => asset('img/temp/event-1.jpg'),
        'alt' => $faker->slug,
        'img_title' => $faker->slug,
        'published' => 1,
        'event_date' => $faker->date(now()),
        'event_place' => $faker->address,
    ];
});
