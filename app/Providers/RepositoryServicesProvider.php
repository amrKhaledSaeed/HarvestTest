<?php

namespace App\Providers;

use App\Repository\DBPostsRepository;
use App\RepositoryInterface\PostsRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostsRepositoryInterface::class,DBPostsRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
