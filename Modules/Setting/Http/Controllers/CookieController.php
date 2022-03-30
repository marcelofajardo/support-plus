<?php

namespace Modules\Setting\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Setting\Http\Requests\CookieRequest;
use Modules\Setting\Repositories\CookieRepositoryInterface;

class CookieController extends Controller
{
    protected $cookiesRepository;

    public function __construct(CookieRepositoryInterface $cookiesRepository)
    {
        $this->cookiesRepository = $cookiesRepository;
    }

    public function index()
    {
        $cookie = $this->cookiesRepository->findById(1);
        return view('setting::cookie.edit', compact('cookie'));
    }

    public function store(CookieRequest $request)
    {
        $this->cookiesRepository->cookieUpdate(1, $request->validated());
        return redirect()->route('cookies.index')
            ->with('success', trans('common.Updated successfully'));
    }
}
