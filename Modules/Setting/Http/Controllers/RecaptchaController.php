<?php

namespace Modules\Setting\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Setting\Http\Requests\RecaptchaRequest;
use Modules\Setting\Repositories\RecaptchaRepositoryInterface;

class RecaptchaController extends Controller
{
    protected $recaptchasRepository;

    public function __construct(RecaptchaRepositoryInterface $recaptchasRepository)
    {
        $this->recaptchasRepository = $recaptchasRepository;
    }


    public function index()
    {
        return view('setting::recaptcha.edit');
    }

    public function store(RecaptchaRequest $request)
    {
        $this->recaptchasRepository->reCaptchaStore($request->validated());
        return redirect()->route('recaptchas.index')
            ->with('success', trans('common.Updated successfully'));
    }


}
