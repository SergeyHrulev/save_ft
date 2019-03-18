<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'comment' => $faker->text,
        'type' => 'callback',
    ];
});
