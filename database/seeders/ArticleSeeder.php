<?php

namespace Database\Seeders;

use App\Models\ArticlesCategory;
use App\Models\Autor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $Articles = [];

        for ($i = 1; $i <= 10; $i++) {

            $body = $faker->realText(2500);
            $title = $faker->sentence(2) . $i;

            $Articles[] = [
                'title' => $title,
                'article_img' => $faker->word . '.jpg',
                'article_excerpt' => $faker->text(255),
                'body_raw' => $body,
                'body_html' => $body,
                'autor_id' => Autor::inRandomOrder()->first()->id,
                'category_id' => ArticlesCategory::inRandomOrder()->first()->id,
                'slug' => str_slug($title),
            ];
        }
        DB::table('articles')->insert($Articles);
    }
}
