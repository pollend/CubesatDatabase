<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\ImageService;
use App\Services\ImageServiceInterface;

use App\Repositories\ImageRepository;
use App\Repositories\ImageRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ImageServiceInterface::class, ImageService::class);
        $this->app->bind(ImageRepositoryInterface::class, ImageRepository::class);
           
    }
}
