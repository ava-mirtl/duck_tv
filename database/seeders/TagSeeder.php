<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        $titles = ["Мероприятия", "Новый выпуск", "Премьера", "Объявление", "Новая серия", "Событие"];

            foreach ($titles as $title) {
                Tag::create([
                    'title' => $title,
                    'text_color' => $faker->hexColor(),
                    'bg_color' => $faker->hexColor(),
                ]);
            }
    }

}
