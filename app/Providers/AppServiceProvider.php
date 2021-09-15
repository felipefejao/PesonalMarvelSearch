<?php

namespace App\Providers;

use App\Repositories\Character\CharacterRepository;
use App\Repositories\Character\CharacterRepositoryContract;
use App\Repositories\Comic\ComicRepository;
use App\Repositories\Comic\ComicRepositoryContract;
use App\Repositories\Event\EventRepository;
use App\Repositories\Event\EventRepositoryContract;
use App\Repositories\Serie\SerieRepository;
use App\Repositories\Serie\SerieRepositoryContract;
use App\Repositories\Story\StoryRepository;
use App\Repositories\Story\StoryRepositoryContract;
use App\Services\Character\CharacterService;
use App\Services\Character\CharacterServiceContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CharacterServiceContract::class, CharacterService::class);
        $this->app->bind(CharacterRepositoryContract::class, CharacterRepository::class);
        $this->app->bind(ComicRepositoryContract::class, ComicRepository::class);
        $this->app->bind(EventRepositoryContract::class, EventRepository::class);
        $this->app->bind(SerieRepositoryContract::class, SerieRepository::class);
        $this->app->bind(StoryRepositoryContract::class, StoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
