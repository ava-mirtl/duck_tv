<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Video::class;

    public function definition()
    {
        $imgArr = ["images/closeup-rubber-duckies_.jpg", "images/closeup-rubber-duckies.jpg", "images/rubber-ducks-arrangement-still-life.jpg", "images/view-summer-pool-float.jpg", "images/cute-rubber-duck-still-life.jpg", "images/bath-ducks-row.jpg"];

        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug(),
            'youtube_id' => $this->faker->uuid,
            'image_path' => $imgArr[array_rand($imgArr)],
            'description' => $this->faker->paragraph,
            'status' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
