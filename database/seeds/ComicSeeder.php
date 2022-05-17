<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 80; $i++) {
            $newComic = new Comic();
            $newComic->title = $faker->sentence(3);
            $newComic->description = $faker->paragraph(6);
            $random = rand(1000, 1083);
            $newComic->thumb = 'https://picsum.photos/id/' . $random . '/200/300';
            $newComic->price = $faker->randomFloat(2, 5, 100);
            $newComic->series = $faker->sentence(2);
            $newComic->sale_date = $faker->date();
            $newComic->type = $faker->sentence(2);
            $newComic->save();
        }
    }
}
