<?php

use Faker\Generator as Faker;

use App\Models\Article;

$factory->define(Article::class, function (Faker $faker) {
    $date_time = $faker->date . '' . $faker->time;
    return [
        'title' => $faker->text('10'),
        'decoration' => $faker->text('30'),
        'content' => $faker->text('100'),
        'user_id' => 1,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
