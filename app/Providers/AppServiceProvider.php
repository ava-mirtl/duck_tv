<?php

namespace App\Providers;

use App\Repositories\EloquentNewsRepository;
use App\Repositories\EloquentVideoRepository;
use App\Repositories\NewsRepository;
use App\Repositories\VideoRepository;
use App\View\Composers\DuckComposer;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(NewsRepository::class, EloquentNewsRepository::class);
        $this->app->bind(VideoRepository::class, EloquentVideoRepository::class);
        view()->composer('*', DuckComposer::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
