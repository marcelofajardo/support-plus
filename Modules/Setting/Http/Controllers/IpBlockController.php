<?php

namespace Modules\Setting\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Setting\DataTables\IpBlockDataTable;
use Modules\Setting\Http\Requests\IpBlockRequest;
use Modules\Setting\Models\IpBlock;
use Modules\Setting\Repositories\IpBlockRepositoryInterface;

class IpBlockController extends Controller
{
    protected $ipBlocksRepository;

    public function __construct(IpBlockRepositoryInterface $ipBlocksRepository)
    {
        $this->ipBlocksRepository = $ipBlocksRepository;
    }

    public function index(IpBlockDataTable $dataTable)
    {
        return $dataTable->render('setting::ip-block.index');
    }

    public function create()
    {
        $ipBlock = new IpBlock();
        return view('setting::ip-block.create', compact('ipBlock'));
    }

    public function store(IpBlockRequest $request)
    {
        $this->ipBlocksRepository->store($request->validated());
        return redirect()->route('ip-blocks.index')
            ->with('success', trans('common.Created successfully'));
    }

    public function show($id)
    {
        $ipBlock = $this->ipBlocksRepository->findById($id);

        return view('setting::ip-block.show', compact('ipBlock'));
    }

    public function edit($id)
    {
        $ipBlock = $this->ipBlocksRepository->findById($id);

        return view('setting::ip-block.edit', compact('ipBlock'));
    }

    public function update(IpBlockRequest $request, $id)
    {
        $this->ipBlocksRepository->update($id, $request->validated());
        return redirect()->route('ip-blocks.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->ipBlocksRepository->deleteById($id);

        return redirect()->route('ip-blocks.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
