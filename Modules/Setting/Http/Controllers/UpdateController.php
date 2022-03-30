<?php

namespace Modules\Setting\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Setting\Http\Requests\UpdateRequest;
use Modules\Setting\Repositories\UpdateRepositoryInterface;

class UpdateController extends Controller
{
    protected $updatesRepository;

    public function __construct(UpdateRepositoryInterface $updatesRepository)
    {
        $this->updatesRepository = $updatesRepository;
    }


    public function index()
    {
        $versions = $this->updatesRepository->getAllUpdateVersion();
        return view('setting::update.edit', compact('versions'));
    }

    public function store(UpdateRequest $request)
    {
        $this->updatesRepository->store($request->validated());
        return redirect()->route('updates.index')
            ->with('success', trans('common.Updated successfully'));
    }

}
