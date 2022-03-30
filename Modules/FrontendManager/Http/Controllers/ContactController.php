<?php

namespace Modules\FrontendManager\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Modules\FrontendManager\DataTables\ContactDataTable;
use Modules\FrontendManager\Http\Requests\ContactRequest;
use Modules\FrontendManager\Repositories\ContactRepositoryInterface;


class ContactController extends Controller
{
    protected $contactsRepository;

    public function __construct(ContactRepositoryInterface $contactsRepository)
    {
        $this->contactsRepository = $contactsRepository;
    }

    public function index(ContactDataTable $dataTable)
    {
        return $dataTable->render('frontendmanager::contact.index');
    }

    public function create()
    {
        $contact = $this->contactsRepository->newObject();

        return view('frontendmanager::contact.create', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $this->contactsRepository->store($request->validated());
        return Redirect::back()
            ->with('success', trans('common.Message Send successfully'));
    }

    public function destroy($id)
    {
        $this->contactsRepository->deleteById($id);

        return redirect()->route('contacts.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
