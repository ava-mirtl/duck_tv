<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $titles = ["Новости", "Видео", "Виды уток", "История уток"];
        $sort = 1;
        foreach ($titles as $title) {
            MenuItem::create([
                'title' => $title,
                'sort' => $sort,
                'status' => 1
            ]);
            $sort++;
        }

    }
}
