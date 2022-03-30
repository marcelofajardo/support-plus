<?php

namespace Modules\FrontendManager\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\FrontendManager\Http\Requests\BannerRequest;
use Modules\FrontendManager\Repositories\BannerRepositoryInterface;


class BannerController extends Controller
{
    protected $bannersRepository;

    public function __construct(BannerRepositoryInterface $bannersRepository)
    {
        $this->bannersRepository = $bannersRepository;
    }

    public function index()
    {
        $banner = $this->bannersRepository->findById(1);
        return view('frontendmanager::banner.edit', compact('banner'));
    }

    public function store(BannerRequest $request)
    {
        $this->bannersRepository->update(1, $request->validated());
        return redirect()->back()
            ->with('success', trans('common.Updated successfully'));
    }
}
