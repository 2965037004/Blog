<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys = ['PHP','MySQL','HTML','CSS','JavaScript'];

            Category::insert([
                'category' => $categorys[0],
            ]);

    }
}
