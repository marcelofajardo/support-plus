<?php

namespace App\Providers;

use App\Repositories\AjaxRepositoryInterface;
use App\Repositories\Eloquent\AjaxRepository;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\ProfileRepository;
use App\Repositories\EloquentRepositoryInterface;
use App\Repositories\ProfileRepositoryInterface;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(AjaxRepositoryInterface::class, AjaxRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
    }

    public function boot()
    {

    }
}
