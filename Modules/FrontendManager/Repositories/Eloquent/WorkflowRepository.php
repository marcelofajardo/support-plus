<?php

namespace Modules\FrontendManager\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\FrontendManager\Models\Workflow;
use Modules\FrontendManager\Repositories\WorkflowRepositoryInterface;

class WorkflowRepository extends BaseRepository implements WorkflowRepositoryInterface
{
    protected $model;


    public function __construct(Workflow $model)
    {
        $this->model = $model;
    }
}
