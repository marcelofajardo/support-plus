<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Setting\Http\Requests\GeneralSettingRequest;
use Modules\Setting\Repositories\CurrencyRepositoryInterface;
use Modules\Setting\Repositories\GeneralSettingRepositoryInterface;
use Modules\Setting\Repositories\LanguageRepositoryInterface;
use Modules\Setting\Repositories\ZoneRepositoryInterface;


class GeneralSettingController extends Controller
{
    protected $generalSettingsRepository, $zoneRepository, $languageRepository, $currencyRepository;

    public function __construct(GeneralSettingRepositoryInterface $generalSettingsRepository,
                                ZoneRepositoryInterface           $zoneRepository,
                                LanguageRepositoryInterface       $languageRepository,
                                CurrencyRepositoryInterface       $currencyRepository)
    {
        $this->generalSettingsRepository = $generalSettingsRepository;
        $this->zoneRepository = $zoneRepository;
        $this->languageRepository = $languageRepository;
        $this->currencyRepository = $currencyRepository;
    }


    public function index()
    {
        $generalSetting = $this->generalSettingsRepository->all();
        $trials = trials();
        $timezones = $this->zoneRepository->allInArray();
        $languages = $this->languageRepository->allInArray('code', 'native');
        $currencies = $this->currencyRepository->allInArray('code', 'code');
        return view('setting::general-setting.edit', compact('generalSetting', 'timezones', 'trials', 'languages', 'currencies'));
    }


    public function store(GeneralSettingRequest $request)
    {
        $this->generalSettingsRepository->generalSettingStore($request->validated());
        return redirect()->route('general-settings.index')
            ->with('success', trans('common.Updated successfully'));
    }
}
