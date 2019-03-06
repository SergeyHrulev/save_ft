<?php

use Faker\Generator as Faker;

$factory->define(App\Glossary::class, function (Faker $faker) {
    return [
        'chapter_id' => App\Chapter::inRandomOrder()->first()->id,
        'letter' => 'A',
        'slug' => $faker->slug,
        'title' => $faker->sentence(3),
        'english_synonims' => $faker->sentence,
        'text' => $faker->text,
        'published' => 1,
    ];
});
