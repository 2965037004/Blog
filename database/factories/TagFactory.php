<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tag::class, function (Faker $faker) {
    $date_time = $faker->date . '' . $faker->time;
    return [
        'name' => $faker->name,
        'hot' => $faker->randomNumber(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
