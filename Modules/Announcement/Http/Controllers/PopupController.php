<?php

namespace Modules\Announcement\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Announcement\DataTables\PopupDataTable;
use Modules\Announcement\Http\Requests\PopupRequest;
use Modules\Announcement\Repositories\PopupRepositoryInterface;

class PopupController extends Controller
{
    protected $popupsRepository;

    public function __construct(PopupRepositoryInterface $popupsRepository)
    {
        $this->popupsRepository = $popupsRepository;
    }

    public function index(PopupDataTable $dataTable)
    {
        return $dataTable->render('announcement::popup.index');
    }

    public function create()
    {
        $popup = $this->popupsRepository->newObject();
        return view('announcement::popup.create', compact('popup'));
    }


    public function store(PopupRequest $request)
    {
        $this->popupsRepository->store($request->validated());
        return redirect()->route('popups.index')
            ->with('success', trans('common.Created successfully'));
    }


    public function show($id)
    {
        $popup = $this->popupsRepository->findById($id);

        return view('announcement::popup.show', compact('popup'));
    }

    public function edit($id)
    {
        $popup = $this->popupsRepository->findById($id);

        return view('announcement::popup.edit', compact('popup'));
    }

    public function update(PopupRequest $request, $id)
    {
        $this->popupsRepository->update($id, $request->validated());
        return redirect()->route('popups.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->popupsRepository->deleteById($id);
        return redirect()->route('popups.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
