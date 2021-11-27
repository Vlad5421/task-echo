<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesCategoryesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $ArticlesCategory = [];

        for ($i = 1; $i <= 10; $i++) {

            $category_name = $faker->sentence(2) . $i;
            $ArticlesCategory[] = [
                'parent_id' => rand(1, 10) > 2 ? rand(3, 10) : 1,
                'category_name' => $category_name,
                'category_img' => $faker->word . '.jpg',
                'note' => $faker->text(255),
                'slug' => str_slug($category_name, '-'),
            ];
        }
        DB::table('articles_categories')->insert($ArticlesCategory);
    }
}
