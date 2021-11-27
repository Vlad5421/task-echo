<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $Autors = [];

        for ($i = 1; $i <= 10; $i++){

            $fio = $faker->sentence(2) . $i;

            $Autors[] = [
                'fio'           => ucwords($fio),
                'birth_year'    => $faker->year,
                'biography'     => rand(1, 10) > 2 ? $faker->text(1000) : null,
                'slug'          => str_slug($fio),
            ];
        }
        DB::table('autors')->insert($Autors);
    }
}
