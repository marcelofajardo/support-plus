<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Setting\DataTables\CurrencyDataTable;
use Modules\Setting\Http\Requests\CurrencyRequest;
use Modules\Setting\Repositories\CurrencyRepositoryInterface;


class CurrencyController extends Controller
{
    protected $currenciesRepository;

    public function __construct(CurrencyRepositoryInterface $currenciesRepository)
    {
        $this->currenciesRepository = $currenciesRepository;
    }

    public function index(CurrencyDataTable $dataTable)
    {
        return $dataTable->render('setting::currency.index');
    }

    public function create()
    {
        $currency = $this->currenciesRepository->newObject();
        return view('setting::currency.create', compact('currency'));
    }

    public function store(CurrencyRequest $request)
    {
        $this->currenciesRepository->store($request->validated());
        return redirect()->route('currencies.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function show($id)
    {
        $currency = $this->currenciesRepository->findById($id);
        return view('setting::currency.show', compact('currency'));
    }

    public function edit($id)
    {
        $currency = $this->currenciesRepository->findById($id);
        return view('setting::currency.edit', compact('currency'));
    }


    public function update(CurrencyRequest $request, $id)
    {
        $this->currenciesRepository->update($id, $request->validated());
        return redirect()->route('currencies.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->currenciesRepository->deleteById($id);
        return redirect()->route('currencies.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
