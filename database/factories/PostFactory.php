<?php

use Faker\Generator as Faker;

use Illuminate\Support\Facades\DB;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    $date_time = $faker->date . '' . $faker->time;

    $category_ids = DB::table('categories')->pluck('id')->toArray();
    $user_ids = DB::table('users')->pluck('id')->toArray();

    return [
        'category_id' => $faker->randomElement($category_ids),
        'user_id' => $faker->randomElement($user_ids),
        'title' => $faker->word,
        'summary' => $faker->word,
        'content' => $faker->text,
        'origin' => $faker->text,
        'comment_count' => $faker->randomNumber(),
        'view_count' => $faker->randomNumber(),
        'favorite_count' => $faker->randomNumber(),
        'published' => $faker->boolean,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
