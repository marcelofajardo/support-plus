<?php

namespace Modules\FrontendManager\Repositories\Eloquent;


use App\Repositories\Eloquent\BaseRepository;
use Modules\FrontendManager\Models\Theme;
use Modules\FrontendManager\Repositories\ThemeRepositoryInterface;

class ThemeRepository extends BaseRepository implements ThemeRepositoryInterface
{
    protected $model;

    public function __construct(Theme $model)
    {
        $this->model = $model;
    }

}
