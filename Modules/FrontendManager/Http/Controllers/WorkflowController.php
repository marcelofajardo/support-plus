<?php

namespace Modules\FrontendManager\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\FrontendManager\DataTables\WorkflowDataTable;
use Modules\FrontendManager\Http\Requests\WorkflowRequest;
use Modules\FrontendManager\Models\Workflow;
use Modules\FrontendManager\Repositories\WorkflowRepositoryInterface;

class WorkflowController extends Controller
{
    protected $workflowsRepository;

    public function __construct(WorkflowRepositoryInterface $workflowsRepository)
    {
        $this->workflowsRepository = $workflowsRepository;
    }

    public function index(WorkflowDataTable $dataTable)
    {
        return $dataTable->render('frontendmanager::workflow.index');
    }

    public function create()
    {
        $workflow = new Workflow();
        return view('frontendmanager::workflow.create', compact('workflow'));
    }


    public function store(WorkflowRequest $request)
    {
        $this->workflowsRepository->store($request->validated());
        return redirect()->route('workflows.index')
            ->with('success', trans('common.Created successfully'));
    }


    public function edit($id)
    {
        $workflow = $this->workflowsRepository->findById($id);

        return view('frontendmanager::workflow.edit', compact('workflow'));
    }

    public function update(WorkflowRequest $request, $id)
    {
        $this->workflowsRepository->update($id, $request->validated());
        return redirect()->route('workflows.index')
            ->with('success', trans('common.Updated successfully'));
    }

    public function destroy($id)
    {
        $this->workflowsRepository->deleteById($id);
        return redirect()->route('workflows.index')
            ->with('success', trans('common.Deleted successfully'));
    }
}
