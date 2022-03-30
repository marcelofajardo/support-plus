<?php

namespace Modules\Setting\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Setting\Repositories\CityRepositoryInterface;
use Modules\Setting\Repositories\CookieRepositoryInterface;
use Modules\Setting\Repositories\CountryRepositoryInterface;
use Modules\Setting\Repositories\CurrencyRepositoryInterface;
use Modules\Setting\Repositories\Eloquent\CityRepository;
use Modules\Setting\Repositories\Eloquent\CookieRepository;
use Modules\Setting\Repositories\Eloquent\CountryRepository;
use Modules\Setting\Repositories\Eloquent\CurrencyRepository;
use Modules\Setting\Repositories\Eloquent\EmailSettingRepository;
use Modules\Setting\Repositories\Eloquent\GeneralSettingRepository;
use Modules\Setting\Repositories\Eloquent\IpBlockRepository;
use Modules\Setting\Repositories\Eloquent\LanguageRepository;
use Modules\Setting\Repositories\Eloquent\PreferenceRepository;
use Modules\Setting\Repositories\Eloquent\RecaptchaRepository;
use Modules\Setting\Repositories\Eloquent\RoleRepository;
use Modules\Setting\Repositories\Eloquent\SocialSettingRepository;
use Modules\Setting\Repositories\Eloquent\StateRepository;
use Modules\Setting\Repositories\Eloquent\TermRepository;
use Modules\Setting\Repositories\Eloquent\UpdateRepository;
use Modules\Setting\Repositories\Eloquent\UserRepository;
use Modules\Setting\Repositories\Eloquent\UtilityRepository;
use Modules\Setting\Repositories\Eloquent\ZoneRepository;
use Modules\Setting\Repositories\EmailSettingRepositoryInterface;
use Modules\Setting\Repositories\GeneralSettingRepositoryInterface;
use Modules\Setting\Repositories\IpBlockRepositoryInterface;
use Modules\Setting\Repositories\LanguageRepositoryInterface;
use Modules\Setting\Repositories\PreferenceRepositoryInterface;
use Modules\Setting\Repositories\RecaptchaRepositoryInterface;
use Modules\Setting\Repositories\RoleRepositoryInterface;
use Modules\Setting\Repositories\SocialSettingRepositoryInterface;
use Modules\Setting\Repositories\StateRepositoryInterface;
use Modules\Setting\Repositories\TermRepositoryInterface;
use Modules\Setting\Repositories\UpdateRepositoryInterface;
use Modules\Setting\Repositories\UserRepositoryInterface;
use Modules\Setting\Repositories\UtilityRepositoryInterface;
use Modules\Setting\Repositories\ZoneRepositoryInterface;


class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CookieRepositoryInterface::class, CookieRepository::class);

        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
        $this->app->bind(CountryRepositoryInterface::class, CountryRepository::class);
        $this->app->bind(CurrencyRepositoryInterface::class, CurrencyRepository::class);
        $this->app->bind(EmailSettingRepositoryInterface::class, EmailSettingRepository::class);
        $this->app->bind(GeneralSettingRepositoryInterface::class, GeneralSettingRepository::class);
        $this->app->bind(IpBlockRepositoryInterface::class, IpBlockRepository::class);
        $this->app->bind(LanguageRepositoryInterface::class, LanguageRepository::class);
        $this->app->bind(PreferenceRepositoryInterface::class, PreferenceRepository::class);
        $this->app->bind(RecaptchaRepositoryInterface::class, RecaptchaRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(SocialSettingRepositoryInterface::class, SocialSettingRepository::class);
        $this->app->bind(StateRepositoryInterface::class, StateRepository::class);
        $this->app->bind(TermRepositoryInterface::class, TermRepository::class);
        $this->app->bind(UpdateRepositoryInterface::class, UpdateRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UtilityRepositoryInterface::class, UtilityRepository::class);
        $this->app->bind(ZoneRepositoryInterface::class, ZoneRepository::class);
    }

    public function boot()
    {

    }
}
