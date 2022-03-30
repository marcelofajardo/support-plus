<?php

namespace Modules\Setting\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Setting\Http\Requests\TermRequest;
use Modules\Setting\Repositories\TermRepositoryInterface;


class TermController extends Controller
{
    protected $termsRepository;

    public function __construct(TermRepositoryInterface $termsRepository)
    {
        $this->termsRepository = $termsRepository;
    }

    public function index()
    {
        $term = $this->termsRepository->findById(1);

        return view('setting::term.edit', compact('term'));
    }


    public function update(TermRequest $request, $id)
    {
        $this->termsRepository->update($id, $request->validated());
        return redirect()->route('terms.index')
            ->with('success', trans('common.Updated successfully'));
    }


}
