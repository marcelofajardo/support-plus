<?php

namespace Modules\Blog\Repositories;

use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BlogPostRepositoryInterface extends EloquentRepositoryInterface
{
    public function getRecentPostByLimit(int $limit = 20): Collection;

    public function getAllByCategory(int $category_id = 0): object;

    public function getBlogPostBySlug(string $slug): Model;
}
