<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'company' => $faker->company(),
        'avatar' => $faker->imageUrl(400, 400, 'people'),
        'text' => $faker->paragraph(4),
    ];
});
