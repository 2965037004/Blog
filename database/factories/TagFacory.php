<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'hot' => $faker->randomNumber(),
    ];
});
