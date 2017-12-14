<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = factory(App\Models\Comment::class)->times(300)->make();

        App\Models\Comment::insert($comments->toArray());
    }
}
