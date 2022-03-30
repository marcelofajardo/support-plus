<?php

namespace Modules\FrontendManager\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\FrontendManager\DataTables\FaqDataTable;
use Modules\FrontendManager\Http\Requests\FaqRequest;
use Modules\FrontendManager\Repositories\FaqRepositoryInterface;

class FaqController extends Controller
{
    protected $faqsRepository;

    public function __construct(FaqRepositoryInterface $faqsRepository)
    {
        $this->faqsRepository = $faqsRepository;
    }

    public function index(FaqDataTable $dataTable)
    {
        return $dataTable->render('frontendmanager::faq.index');
    }

    public function create()
    {
        $faq = $this->faqsRepository->newObject();

        return view('frontendmanager::faq.create', compact('faq'));
    }

    public function store(FaqRequest $request)
    {
        $this->faqsRepository->store($request->validated());
        return redirect()->route('faqs.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function edit($id)
    {
        $faq = $this->faqsRepository->findById($id);
        return view('frontendmanager::faq.edit', compact('faq'));
    }

    public function update(FaqRequest $request, $id)
    {
        $this->faqsRepository->update($id, $request->validated());
        return redirect()->route('faqs.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->faqsRepository->deleteById($id);
        return redirect()->route('faqs.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
