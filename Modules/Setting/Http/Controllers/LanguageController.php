<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Setting\DataTables\LanguageDataTable;
use Modules\Setting\Http\Requests\LanguageRequest;
use Modules\Setting\Models\Language;
use Modules\Setting\Repositories\LanguageRepositoryInterface;


class LanguageController extends Controller
{
    protected $languagesRepository;

    public function __construct(LanguageRepositoryInterface $languagesRepository)
    {
        $this->languagesRepository = $languagesRepository;
    }


    public function index(LanguageDataTable $dataTable)
    {
        return $dataTable->render('setting::language.index');
    }

    public function create()
    {
        $language = new Language();
        return view('setting::language.create', compact('language'));
    }

    public function store(LanguageRequest $request)
    {
        $this->languagesRepository->store($request->validated());
        return redirect()->route('localization.languages.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function show($id)
    {
        $language = $this->languagesRepository->findById($id);

        return view('setting::language.show', compact('language'));
    }

    public function edit($id)
    {
        $language = $this->languagesRepository->findById($id);

        return view('setting::language.edit', compact('language'));
    }


    public function update(LanguageRequest $request, $id)
    {
        $this->languagesRepository->update($id, $request->validated());
        return redirect()->route('localization.languages.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->languagesRepository->deleteById($id);
        return redirect()->route('localization.languages.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
