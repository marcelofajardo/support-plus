<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Setting\DataTables\CityDataTable;
use Modules\Setting\Http\Requests\CityRequest;
use Modules\Setting\Models\City;
use Modules\Setting\Repositories\CityRepositoryInterface;
use Modules\Setting\Repositories\CountryRepositoryInterface;
use Modules\Setting\Repositories\StateRepositoryInterface;


class CityController extends Controller
{
    protected $citiesRepository, $statesRepository, $countriesRepository;

    public function __construct(CityRepositoryInterface    $citiesRepository,
                                CountryRepositoryInterface $countriesRepository,
                                StateRepositoryInterface   $statesRepository
    )
    {
        $this->citiesRepository = $citiesRepository;
        $this->statesRepository = $statesRepository;
        $this->countriesRepository = $countriesRepository;
    }

    public function index(CityDataTable $dataTable)
    {
        return $dataTable->render('setting::city.index');
    }

    public function create()
    {
        $city = new City();
        $counties = $this->countriesRepository->allInArray();
        $states = $this->statesRepository->allInArray();
        return view('setting::city.create', compact('city', 'counties', 'states'));
    }

    public function store(CityRequest $request)
    {
        $this->citiesRepository->store($request->validated());
        return redirect()->route('cities.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function show($id)
    {
        $city = $this->citiesRepository->findById($id);

        return view('setting::city.show', compact('city'));
    }

    public function edit($id)
    {
        $city = $this->citiesRepository->findById($id);
        $counties = $this->countriesRepository->allInArray();
        $states = $this->statesRepository->allInArray();
        return view('setting::city.edit', compact('city', 'counties', 'states'));
    }

    public function update(CityRequest $request, $id)
    {
        $this->citiesRepository->update($id, $request->validated());
        return redirect()->route('cities.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->citiesRepository->deleteById($id);

        return redirect()->route('cities.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
