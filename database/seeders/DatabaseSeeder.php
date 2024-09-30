<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(NewsSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TaggableSeeder::class);
        $this->call(MenuItemSeeder::class);
        $this->call(ApplicationSeeder::class);

    }
}
