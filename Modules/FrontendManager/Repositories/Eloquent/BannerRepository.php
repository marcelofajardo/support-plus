<?php

namespace Modules\FrontendManager\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\FrontendManager\Models\Banner;
use Modules\FrontendManager\Repositories\BannerRepositoryInterface;

class BannerRepository extends BaseRepository implements BannerRepositoryInterface
{
    protected $model;

    public function __construct(Banner $model)
    {
        $this->model = $model;
    }


}
