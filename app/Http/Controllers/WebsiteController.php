<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Repositories\BlogCategoryRepositoryInterface;
use Modules\Blog\Repositories\BlogPostRepositoryInterface;
use Modules\FrontendManager\Repositories\BannerRepositoryInterface;
use Modules\FrontendManager\Repositories\FaqRepositoryInterface;
use Modules\FrontendManager\Repositories\FeatureRepositoryInterface;
use Modules\FrontendManager\Repositories\PartnerRepositoryInterface;
use Modules\FrontendManager\Repositories\TestimonialRepositoryInterface;
use Modules\FrontendManager\Repositories\WorkflowRepositoryInterface;
use Modules\Subscription\Repositories\Eloquent\PackageFeatureRepository;
use Modules\Subscription\Repositories\PackageRepositoryInterface;
use Modules\Subscription\Repositories\SubscriptionSettingRepositoryInterface;

class WebsiteController extends Controller
{
    protected $faqsRepository, $blogCategoriesRepository, $blogPostsRepository,
        $featuresRepository, $packageRepository, $packageFeatureRepository,
        $subscriptionSettingRepository, $partnerRepository, $workflowRepository;

    public function __construct(FaqRepositoryInterface                 $faqsRepository,
                                BlogCategoryRepositoryInterface        $blogCategoriesRepository,
                                BlogPostRepositoryInterface            $blogPostsRepository,
                                FeatureRepositoryInterface             $featuresRepository,
                                BannerRepositoryInterface              $bannersRepository,
                                TestimonialRepositoryInterface         $testimonialsRepository,
                                PackageRepositoryInterface             $packageRepository,
                                PackageFeatureRepository               $packageFeatureRepository,
                                SubscriptionSettingRepositoryInterface $subscriptionSettingRepository,
                                PartnerRepositoryInterface             $partnerRepository,
                                WorkflowRepositoryInterface            $workflowRepository
    )
    {
        $this->faqsRepository = $faqsRepository;
        $this->blogCategoriesRepository = $blogCategoriesRepository;
        $this->blogPostsRepository = $blogPostsRepository;
        $this->featuresRepository = $featuresRepository;
        $this->bannersRepository = $bannersRepository;
        $this->testimonialsRepository = $testimonialsRepository;
        $this->packageRepository = $packageRepository;
        $this->packageFeatureRepository = $packageFeatureRepository;
        $this->subscriptionSettingRepository = $subscriptionSettingRepository;
        $this->partnerRepository = $partnerRepository;
        $this->workflowRepository = $workflowRepository;

    }

    public function index()
    {
        $features = $this->featuresRepository->allActive();
        $partners = $this->partnerRepository->allActive();
        $workflows = $this->workflowRepository->allActive();
        $banner = $this->bannersRepository->findById(1);
        $blogs = $this->blogPostsRepository->getRecentPostByLimit(3);
        $testimonials = $this->testimonialsRepository->all();
        return view('frontend.pages.index', compact('features', 'banner', 'blogs', 'testimonials', 'partners', 'workflows'));
    }

    public function features()
    {
        $features = $this->featuresRepository->allActive();
        return view('frontend.pages.features', compact('features'));
    }

    public function pricing()
    {
        $packages = $this->packageRepository->allActive();
        $features = $this->packageFeatureRepository->all();
        $setting = $this->subscriptionSettingRepository->getSetting();
        return view('frontend.pages.pricing', compact('packages', 'features', 'setting'));
    }

    public function blog(Request $request)
    {
        $category_id = $request->category ?? 0;
        $categories = $this->blogCategoriesRepository->allActive();
        $blogs = $this->blogPostsRepository->getAllByCategory($category_id);

        return view('frontend.pages.blog', compact('categories', 'category_id', 'blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = $this->blogPostsRepository->getBlogPostBySlug($slug);
        $recent_posts = $this->blogPostsRepository->getRecentPostByLimit(3);
        $categories = $this->blogCategoriesRepository->allActive();
        return view('frontend.pages.blogDetails', compact('blog', 'categories', 'recent_posts'));
    }

    public function faq()
    {
        $faqs = $this->faqsRepository->allActive();
        return view('frontend.pages.faq', compact('faqs'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function privacy()
    {
        return view('frontend.pages.privacy');
    }

    public function condition()
    {
        return view('frontend.pages.condition');
    }
}
