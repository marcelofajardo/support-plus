<?php

namespace Modules\FrontendManager\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\FrontendManager\Models\Partner;
use Modules\FrontendManager\Repositories\PartnerRepositoryInterface;

class PartnerRepository extends BaseRepository implements PartnerRepositoryInterface
{
    protected $model;


    public function __construct(Partner $model)
    {
        $this->model = $model;
    }
}
