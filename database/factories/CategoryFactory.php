<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->word,
        'hot' => $faker->randomNumber(),
        'image' => $faker->word,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
