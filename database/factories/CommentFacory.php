<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {
    return [
        'post_id' => function () {
             return factory(App\Models\Post::class)->create()->id;
        },
        'parent_id' => $faker->randomNumber(),
        'parent_name' => $faker->word,
        'username' => $faker->userName,
        'email' => $faker->safeEmail,
        'blog' => $faker->word,
        'content' => $faker->text,
    ];
});
