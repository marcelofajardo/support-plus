<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Modules\FrontendManager\Models\Page;
use Modules\Setting\Models\GeneralSetting;
use Modules\Setting\Models\IpBlock;
use Modules\Setting\Models\Language;
use Modules\Setting\Models\Preference;
use Modules\Setting\Models\SocialSetting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RepositoryServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Schema::defaultStringLength(125);
        $this->app->singleton('activeLanguages', function () {
            return Language::where('status', 1)
                ->orderBy('status', 'desc')
                ->orderBy('name', 'asc')
                ->get();
        });

        $this->app->singleton('colors', function () {
            return DB::table('themes')->latest()->first();
        });

        $this->app->singleton('generalSettings', function () {
            return GeneralSetting::pluck('value', 'key')->toArray();
        });


        $this->app->singleton('preferences', function () {
            return Preference::pluck('status', 'key')->toArray();
        });


        $this->app->singleton('block_ips', function () {
            return IpBlock::pluck('ip')->toArray();
        });


        $this->app->singleton('languageFullName', function () {
            return Language::where('code', app()->getLocale())->first();
        });

        $this->app->singleton('notifications', function () {
            return auth()->user()->unreadNotifications;
        });


        View::composer('frontend.layouts.app', function ($view) {
            $data['socialMedia'] = SocialSetting::where('status', 1)->get();
            $data['pages'] = Page::where('status', 1)->get(['title', 'slug', 'menu', 'footer1', 'footer2', 'system']);
            $view->with($data);
        });
    }
}
