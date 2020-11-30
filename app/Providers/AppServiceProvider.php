<?php

namespace App\Providers;

use App\Http\Services\CategoryService;
use App\Http\Services\CommentService;
use App\Http\Services\PostService;
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
        $this->app->bind('PostService', PostService::class);
        $this->app->bind('CategoryService', CategoryService::class);
        $this->app->bind('CommentService', CommentService::class);
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
