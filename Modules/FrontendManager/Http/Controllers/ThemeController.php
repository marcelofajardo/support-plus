<?php

namespace Modules\FrontendManager\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\FrontendManager\DataTables\ThemeDataTable;
use Modules\FrontendManager\Http\Requests\ThemeRequest;
use Modules\FrontendManager\Repositories\ThemeRepositoryInterface;

class ThemeController extends Controller
{
    protected $themesRepository;

    public function __construct(ThemeRepositoryInterface $themesRepository)
    {
        $this->themesRepository = $themesRepository;
    }


    public function index(ThemeDataTable $dataTable)
    {
        return $dataTable->render('frontendmanager::theme.index');
    }


    public function create()
    {
        $theme = $this->themesRepository->newObject();

        return view('frontendmanager::theme.create', compact('theme'));
    }


    public function store(ThemeRequest $request)
    {
        $this->themesRepository->store($request->validated());
        return redirect()->route('themes.index')
            ->with('success', trans('common.Created successfully'));
    }


    public function edit($id)
    {
        $theme = $this->themesRepository->findById($id);

        return view('frontendmanager::theme.edit', compact('theme'));
    }


    public function update(ThemeRequest $request, $id)
    {
        $this->themesRepository->update($id, $request->validated());
        return redirect()->route('themes.index')
            ->with('success', trans('common.Updated successfully'));
    }


    public function destroy($id)
    {
        $this->themesRepository->deleteById($id);
        return redirect()->route('themes.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
