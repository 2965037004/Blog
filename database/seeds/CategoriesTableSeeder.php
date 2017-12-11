<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(App\Models\Category::class)->times(10)->make();

        App\Models\Category::insert($categories->toArray());
    }
}
