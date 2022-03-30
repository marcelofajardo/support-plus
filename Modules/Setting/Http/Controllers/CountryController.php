<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Setting\DataTables\CountryDataTable;
use Modules\Setting\Http\Requests\CountryRequest;
use Modules\Setting\Repositories\CountryRepositoryInterface;

class CountryController extends Controller
{
    protected $countriesRepository;

    public function __construct(CountryRepositoryInterface $countriesRepository)
    {
        $this->countriesRepository = $countriesRepository;
    }

    public function index(CountryDataTable $dataTable)
    {
        return $dataTable->render('setting::country.index');
    }

    public function create()
    {
        $country = $this->countriesRepository->newObject();
        return view('setting::country.create', compact('country'));
    }

    public function store(CountryRequest $request)
    {
        $this->countriesRepository->store($request->validated());
        return redirect()->route('countries.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function show($id)
    {
        $country = $this->countriesRepository->findById($id);

        return view('setting::country.show', compact('country'));
    }

    public function edit($id)
    {
        $country = $this->countriesRepository->findById($id);

        return view('setting::country.edit', compact('country'));
    }

    public function update(CountryRequest $request, $id)
    {
        $this->countriesRepository->update($id, $request->validated());
        return redirect()->route('countries.index')
            ->with('success', trans('common.Updated successfully'));
    }


    public function destroy($id)
    {
        $this->countriesRepository->deleteById($id);
        return redirect()->route('countries.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
