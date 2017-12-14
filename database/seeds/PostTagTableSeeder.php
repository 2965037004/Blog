<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
//use Faker\Generator as Faker;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

//        $date_time = $faker->date . ' ' . $faker->time;
        $post_ids = DB::table('posts')->pluck('id')->toArray();
        $tag_ids = DB::table('tags')->pluck('id')->toArray();

        $post_tags = [];
        foreach (range(1, 200) as $key => $value) {
            $post_tags[] = [
                'post_id' =>  $faker->randomElement($post_ids) ,
                'tag_id' =>  $faker->randomElement($tag_ids) ,
                'created_at' => $faker->date . ' ' . $faker->time,
                'updated_at' => $faker->date . ' ' . $faker->time,
            ];
        }

        DB::table('post_tag')->insert($post_tags);
    }
}
