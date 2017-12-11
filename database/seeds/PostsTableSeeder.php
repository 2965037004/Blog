<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(App\Models\Post::class)->times(100)->make();
        App\Models\Post::insert($posts->toArray());
    }
}
