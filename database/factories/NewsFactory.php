<?php

namespace Database\Factories;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = News::class;

    public function definition()
    {
        $imgArr = ["images/closeup-rubber-duckies_.jpg", "images/closeup-rubber-duckies.jpg", "images/view-balloon-twist-sculpture.jpg", "images/rubber-ducks-arrangement-still-life.jpg"];

        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph,
            'image_path' => $imgArr[array_rand($imgArr)],
            'publication_at' => now(),
            'expires_at' =>  Carbon::now()->addDays(rand(1, 30)),
            'status' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
