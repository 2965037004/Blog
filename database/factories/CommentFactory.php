<?php

use Faker\Generator as Faker;

use Illuminate\Support\Facades\DB;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    $date_time = $faker->date . '' . $faker->time;

    $post_ids = DB::table('posts')->pluck('id')->toArray();

    return [
        'post_id' => $faker->randomElement($post_ids),
        'parent_id' => $faker->randomNumber(),
        'parent_name' => $faker->word,
        'username' => $faker->userName,
        'email' => $faker->safeEmail,
        'blog' => $faker->word,
        'content' => $faker->text,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
