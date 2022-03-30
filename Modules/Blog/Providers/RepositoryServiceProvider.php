<?php

namespace Modules\Blog\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Blog\Repositories\BlogCategoryRepositoryInterface;
use Modules\Blog\Repositories\BlogPostRepositoryInterface;
use Modules\Blog\Repositories\Eloquent\BlogCategoryRepository;
use Modules\Blog\Repositories\Eloquent\BlogPostRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(BlogCategoryRepositoryInterface::class, BlogCategoryRepository::class);
        $this->app->bind(BlogPostRepositoryInterface::class, BlogPostRepository::class);
    }

    public function boot()
    {

    }
}
