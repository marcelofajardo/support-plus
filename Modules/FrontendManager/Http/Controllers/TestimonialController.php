<?php

namespace Modules\FrontendManager\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\FrontendManager\DataTables\TestimonialDataTable;
use Modules\FrontendManager\Http\Requests\TestimonialRequest;
use Modules\FrontendManager\Repositories\TestimonialRepositoryInterface;


class TestimonialController extends Controller
{
    protected $testimonialsRepository;

    public function __construct(TestimonialRepositoryInterface $testimonialsRepository)
    {
        $this->testimonialsRepository = $testimonialsRepository;
    }

    public function index(TestimonialDataTable $dataTable)
    {
        return $dataTable->render('frontendmanager::testimonial.index');
    }

    public function create()
    {
        $testimonial = $this->testimonialsRepository->newObject();

        return view('frontendmanager::testimonial.create', compact('testimonial'));
    }

    public function store(TestimonialRequest $request)
    {
        $this->testimonialsRepository->store($request->validated());
        return redirect()->route('testimonials.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function edit($id)
    {
        $testimonial = $this->testimonialsRepository->findById($id);

        return view('frontendmanager::testimonial.edit', compact('testimonial'));
    }

    public function update(TestimonialRequest $request, $id)
    {
        $this->testimonialsRepository->update($id, $request->validated());
        return redirect()->route('testimonials.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->testimonialsRepository->deleteById($id);
        return redirect()->route('testimonials.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
