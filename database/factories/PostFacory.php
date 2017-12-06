<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'category_id' => function () {
             return factory(App\Models\Category::class)->create()->id;
        },
        'title' => $faker->word,
        'slug' => $faker->word,
        'summary' => $faker->word,
        'content' => $faker->text,
        'origin' => $faker->text,
        'comment_count' => $faker->randomNumber(),
        'view_count' => $faker->randomNumber(),
        'favorite_count' => $faker->randomNumber(),
        'published' => $faker->boolean,
    ];
});
