<?php

use Illuminate\Database\Seeder;

use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tags')->insert([
            ['tag'=>'']
            工具
            解决方案
            知识理论
            工作方法



        ]);
    }
}
