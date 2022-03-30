<?php

namespace Modules\Setting\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Modules\Setting\Http\Requests\EmailSettingRequest;
use Modules\Setting\Repositories\EmailSettingRepositoryInterface;

class EmailSettingController extends Controller
{
    protected $emailSettingsRepository;

    public function __construct(EmailSettingRepositoryInterface $emailSettingsRepository)
    {
        $this->emailSettingsRepository = $emailSettingsRepository;
    }

    public function index()
    {
        return view('setting::email-setting.create');
    }

    public function store(EmailSettingRequest $request)
    {
        $this->emailSettingsRepository->store($request->validated());
        return redirect()->route('email-settings.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function test(Request $request)
    {
        try {
            Mail::to($request->email)->send(new TestMail());
            return redirect()->route('email-settings.index')
                ->with('success', trans('setting.Email sent Successfully'));
        } catch (Exception $exception) {
            return redirect()->route('email-settings.index')
                ->with('error', trans('common.Something Went Wrong'));
        }
    }
}
