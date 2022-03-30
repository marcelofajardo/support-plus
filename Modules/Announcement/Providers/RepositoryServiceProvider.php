<?php

namespace Modules\Announcement\Providers;

use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Modules\Announcement\Repositories\Eloquent\PopupRepository;
use Modules\Announcement\Repositories\PopupRepositoryInterface;


class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PopupRepositoryInterface::class, PopupRepository::class);
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
    }

    public function boot()
    {

    }
}
