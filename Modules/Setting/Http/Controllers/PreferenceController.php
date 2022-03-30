<?php

namespace Modules\Setting\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Setting\DataTables\PreferenceDataTable;
use Modules\Setting\Http\Requests\PreferenceRequest;
use Modules\Setting\Repositories\PreferenceRepositoryInterface;

class PreferenceController extends Controller
{
    protected $preferencesRepository;

    public function __construct(PreferenceRepositoryInterface $preferencesRepository)
    {
        $this->preferencesRepository = $preferencesRepository;
    }

    public function index(PreferenceDataTable $dataTable)
    {
        return $dataTable->render('setting::preference.index');
    }


    public function edit($id)
    {
        $preference = $this->preferencesRepository->findById($id);
        return view('setting::preference.edit', compact('preference'));
    }

    public function update(PreferenceRequest $request, $id)
    {
        $this->preferencesRepository->update($id, $request->validated());
        return redirect()->route('preferences.index')
            ->with('success', trans('common.Updated successfully'));
    }

}
