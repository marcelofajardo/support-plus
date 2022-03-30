<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Traits\IconList;
use Modules\Setting\DataTables\SocialSettingDataTable;
use Modules\Setting\Http\Requests\SocialSettingRequest;
use Modules\Setting\Models\SocialSetting;
use Modules\Setting\Repositories\SocialSettingRepositoryInterface;


class SocialSettingController extends Controller
{
    use IconList;

    protected $socialSettingsRepository;

    public function __construct(SocialSettingRepositoryInterface $socialSettingsRepository)
    {
        $this->socialSettingsRepository = $socialSettingsRepository;
    }


    public function index(SocialSettingDataTable $dataTable)
    {
        return $dataTable->render('setting::social-setting.index');
    }

    public function create()
    {
        $socialSetting = new SocialSetting();
        $icons = $this->themify('brand');
        return view('setting::social-setting.create', compact('socialSetting', 'icons'));
    }


    public function store(SocialSettingRequest $request)
    {
        $this->socialSettingsRepository->store($request->validated());
        return redirect()->route('social-settings.index')
            ->with('success', trans('common.Created successfully'));
    }


    public function show($id)
    {
        $socialSetting = $this->socialSettingsRepository->findById($id);

        return view('setting::social-setting.show', compact('socialSetting'));
    }

    public function edit($id)
    {
        $socialSetting = $this->socialSettingsRepository->findById($id);
        $icons = $this->themify('brand');
        return view('setting::social-setting.edit', compact('socialSetting', 'icons'));
    }

    public function update(SocialSettingRequest $request, $id)
    {
        $this->socialSettingsRepository->update($id, $request->validated());
        return redirect()->route('social-settings.index')
            ->with('success', trans('common.Updated successfully'));
    }


    public function destroy($id)
    {
        $this->socialSettingsRepository->deleteById($id);

        return redirect()->route('social-settings.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
