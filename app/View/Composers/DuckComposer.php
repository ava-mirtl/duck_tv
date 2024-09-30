<?php

namespace App\View\Composers;

use App\Models\MenuItem;
use App\Repositories\NewsRepository;
use App\Repositories\VideoRepository;

use Illuminate\View\View;

class DuckComposer
{
    /**
     * Создать нового компоновщика профиля.
     */
    public function __construct(
        protected NewsRepository $news,
        protected VideoRepository $videos,
        protected MenuItem $menuItems

    ) {}


    public function compose(View $view): void
    {
        $view->with('menuItems', $this->menuItems->all()->sortBy('sort'));
        $view->with('news', $this->news->all());
        $view->with('videos', $this->videos->allWithTags());
    }
}
