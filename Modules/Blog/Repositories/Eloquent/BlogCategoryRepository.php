<?php

namespace Modules\Blog\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Blog\Models\BlogCategory;
use Modules\Blog\Repositories\BlogCategoryRepositoryInterface;


class BlogCategoryRepository extends BaseRepository implements BlogCategoryRepositoryInterface
{
    protected $model;

    public function __construct(BlogCategory $model)
    {
        $this->model = $model;
    }

}
