<?php

namespace Modules\FrontendManager\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\FrontendManager\DataTables\PageDataTable;
use Modules\FrontendManager\Http\Requests\PageRequest;
use Modules\FrontendManager\Repositories\PageRepositoryInterface;


class PageController extends Controller
{
    protected $pagesRepository;

    public function __construct(PageRepositoryInterface $pagesRepository)
    {
        $this->pagesRepository = $pagesRepository;
    }

    public function index(PageDataTable $dataTable)
    {
        return $dataTable->render('frontendmanager::page.index');
    }

    public function create()
    {
        $page = $this->pagesRepository->newObject();
        return view('frontendmanager::page.create', compact('page'));
    }

    public function store(PageRequest $request)
    {
        $this->pagesRepository->store($request->validated());
        return redirect()->route('pages.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function show($id)
    {
        $page = $this->pagesRepository->findById($id);
        return view('frontendmanager::page.show', compact('page'));
    }

    public function edit($id)
    {
        $page = $this->pagesRepository->findById($id);
        return view('frontendmanager::page.edit', compact('page'));
    }

    public function update(PageRequest $request, $id)
    {
        $this->pagesRepository->update($id, $request->validated());
        return redirect()->route('pages.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->pagesRepository->deleteById($id);
        return redirect()->route('pages.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
