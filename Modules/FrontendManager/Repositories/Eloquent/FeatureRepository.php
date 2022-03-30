<?php

namespace Modules\FrontendManager\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use App\Traits\ImageStore;
use Modules\FrontendManager\Models\Feature;
use Modules\FrontendManager\Repositories\FeatureRepositoryInterface;

class FeatureRepository extends BaseRepository implements FeatureRepositoryInterface
{
    use ImageStore;

    protected $model;

    public function __construct(Feature $model)
    {
        $this->model = $model;
    }

}
