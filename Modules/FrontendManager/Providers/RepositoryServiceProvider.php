<?php

namespace Modules\FrontendManager\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\FrontendManager\Repositories\BannerRepositoryInterface;
use Modules\FrontendManager\Repositories\ContactRepositoryInterface;
use Modules\FrontendManager\Repositories\Eloquent\BannerRepository;
use Modules\FrontendManager\Repositories\Eloquent\ContactRepository;
use Modules\FrontendManager\Repositories\Eloquent\EmailSubscriptionRepository;
use Modules\FrontendManager\Repositories\Eloquent\FaqRepository;
use Modules\FrontendManager\Repositories\Eloquent\FeatureRepository;
use Modules\FrontendManager\Repositories\Eloquent\PageRepository;
use Modules\FrontendManager\Repositories\Eloquent\PartnerRepository;
use Modules\FrontendManager\Repositories\Eloquent\TestimonialRepository;
use Modules\FrontendManager\Repositories\Eloquent\ThemeRepository;
use Modules\FrontendManager\Repositories\Eloquent\WorkflowRepository;
use Modules\FrontendManager\Repositories\EmailSubscriptionRepositoryInterface;
use Modules\FrontendManager\Repositories\FaqRepositoryInterface;
use Modules\FrontendManager\Repositories\FeatureRepositoryInterface;
use Modules\FrontendManager\Repositories\PageRepositoryInterface;
use Modules\FrontendManager\Repositories\PartnerRepositoryInterface;
use Modules\FrontendManager\Repositories\TestimonialRepositoryInterface;
use Modules\FrontendManager\Repositories\ThemeRepositoryInterface;
use Modules\FrontendManager\Repositories\WorkflowRepositoryInterface;


class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(WorkflowRepositoryInterface::class, WorkflowRepository::class);
        $this->app->bind(PartnerRepositoryInterface::class, PartnerRepository::class);
        $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(EmailSubscriptionRepositoryInterface::class, EmailSubscriptionRepository::class);
        $this->app->bind(FaqRepositoryInterface::class, FaqRepository::class);
        $this->app->bind(FeatureRepositoryInterface::class, FeatureRepository::class);
        $this->app->bind(PageRepositoryInterface::class, PageRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, TestimonialRepository::class);
        $this->app->bind(ThemeRepositoryInterface::class, ThemeRepository::class);
    }

    public function boot()
    {

    }
}
