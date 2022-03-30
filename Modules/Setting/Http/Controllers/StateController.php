<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Setting\DataTables\StateDataTable;
use Modules\Setting\Http\Requests\StateRequest;
use Modules\Setting\Models\State;
use Modules\Setting\Repositories\CountryRepositoryInterface;
use Modules\Setting\Repositories\StateRepositoryInterface;

class StateController extends Controller
{
    protected $statesRepository, $countriesRepository;

    public function __construct(StateRepositoryInterface $statesRepository, CountryRepositoryInterface $countriesRepository)
    {
        $this->statesRepository = $statesRepository;
        $this->countriesRepository = $countriesRepository;
    }

    public function index(StateDataTable $dataTable)
    {
        return $dataTable->render('setting::state.index');
    }


    public function create()
    {
        $state = new State();
        $counties = $this->countriesRepository->allInArray();
        return view('setting::state.create', compact('state', 'counties'));
    }

    public function store(StateRequest $request)
    {
        $this->statesRepository->store($request->validated());
        return redirect()->route('states.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function show($id)
    {
        $state = $this->statesRepository->findById($id);

        return view('setting::state.show', compact('state'));
    }

    public function edit($id)
    {
        $state = $this->statesRepository->findById($id);
        $counties = $this->countriesRepository->allInArray();
        return view('setting::state.edit', compact('state', 'counties'));
    }

    public function update(StateRequest $request, $id)
    {
        $this->statesRepository->update($id, $request->validated());
        return redirect()->route('states.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->statesRepository->deleteById($id);

        return redirect()->route('states.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
