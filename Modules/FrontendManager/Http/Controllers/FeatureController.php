<?php

namespace Modules\FrontendManager\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\FrontendManager\DataTables\FeatureDataTable;
use Modules\FrontendManager\Http\Requests\FeatureRequest;
use Modules\FrontendManager\Repositories\FeatureRepositoryInterface;


class FeatureController extends Controller
{
    protected $featuresRepository;

    public function __construct(FeatureRepositoryInterface $featuresRepository)
    {
        $this->featuresRepository = $featuresRepository;
    }

    public function index(FeatureDataTable $dataTable)
    {
        return $dataTable->render('frontendmanager::feature.index');
    }

    public function create()
    {
        $feature = $this->featuresRepository->newObject();

        return view('frontendmanager::feature.create', compact('feature'));
    }

    public function store(FeatureRequest $request)
    {
        $this->featuresRepository->store($request->validated());
        return redirect()->route('features.index')
            ->with('success', trans('common.Created successfully'));
    }


    public function edit($id)
    {
        $feature = $this->featuresRepository->findById($id);

        return view('frontendmanager::feature.edit', compact('feature'));
    }

    public function update(FeatureRequest $request, $id)
    {
        $this->featuresRepository->update($id, $request->validated());
        return redirect()->route('features.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->featuresRepository->deleteById($id);
        return redirect()->route('features.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
