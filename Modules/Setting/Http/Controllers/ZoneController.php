<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Setting\DataTables\ZoneDataTable;
use Modules\Setting\Http\Requests\ZoneRequest;
use Modules\Setting\Repositories\ZoneRepositoryInterface;

class ZoneController extends Controller
{
    protected $zonesRepository;

    public function __construct(ZoneRepositoryInterface $zonesRepository)
    {
        $this->zonesRepository = $zonesRepository;
    }

    public function index(ZoneDataTable $dataTable)
    {
        return $dataTable->render('setting::zone.index');
    }

    public function create()
    {
        $zone = $this->zonesRepository->newObject();

        return view('setting::zone.create', compact('zone'));
    }

    public function store(ZoneRequest $request)
    {
        $this->zonesRepository->store($request->validated());
        return redirect()->route('zones.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function show($id)
    {
        $zone = $this->zonesRepository->findById($id);

        return view('setting::zone.show', compact('zone'));
    }

    public function edit($id)
    {
        $zone = $this->zonesRepository->findById($id);

        return view('setting::zone.edit', compact('zone'));
    }

    public function update(ZoneRequest $request, $id)
    {
        $this->zonesRepository->update($id, $request->validated());
        return redirect()->route('zones.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->zonesRepository->deleteById($id);
        return redirect()->route('zones.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
