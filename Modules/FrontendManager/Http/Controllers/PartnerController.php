<?php

namespace Modules\FrontendManager\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\FrontendManager\DataTables\PartnerDataTable;
use Modules\FrontendManager\Http\Requests\PartnerRequest;
use Modules\FrontendManager\Models\Partner;
use Modules\FrontendManager\Repositories\PartnerRepositoryInterface;

class PartnerController extends Controller
{
    protected $partnersRepository;

    public function __construct(PartnerRepositoryInterface $partnersRepository)
    {
        $this->partnersRepository = $partnersRepository;
    }

    public function index(PartnerDataTable $dataTable)
    {
        return $dataTable->render('frontendmanager::partner.index');
    }

    public function create()
    {
        $partner = new Partner();
        return view('frontendmanager::partner.create', compact('partner'));
    }


    public function store(PartnerRequest $request)
    {
        $this->partnersRepository->store($request->validated());
        return redirect()->route('partners.index')
            ->with('success', trans('common.Created successfully'));
    }


    public function edit($id)
    {
        $partner = $this->partnersRepository->findById($id);

        return view('frontendmanager::partner.edit', compact('partner'));
    }

    public function update(PartnerRequest $request, $id)
    {
        $this->partnersRepository->update($id, $request->validated());
        return redirect()->route('partners.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->partnersRepository->deleteById($id);
        return redirect()->route('partners.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
