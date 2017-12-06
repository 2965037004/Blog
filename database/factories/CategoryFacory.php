<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'hot' => $faker->randomNumber(),
        'image' => $faker->word,
    ];
});
