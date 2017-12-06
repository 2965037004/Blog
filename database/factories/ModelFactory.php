<?php

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'hot' => $faker->randomNumber(),
        'image' => $faker->word,
    ];
});

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

$factory->define(App\Models\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'hot' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt($faker->password),
        'remember_token' => str_random(10),
    ];
});

