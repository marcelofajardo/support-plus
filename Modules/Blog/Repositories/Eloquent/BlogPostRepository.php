<?php

namespace Modules\Blog\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Models\BlogPost;
use Modules\Blog\Repositories\BlogPostRepositoryInterface;


class BlogPostRepository extends BaseRepository implements BlogPostRepositoryInterface
{
    protected $model;

    public function __construct(BlogPost $model)
    {
        $this->model = $model;
    }

    public function getRecentPostByLimit(int $limit = 20): Collection
    {
        return $this->model::where('status', 1)->latest()->limit($limit)->get();
    }

    public function getAllByCategory(int $category_id = 0): object
    {
        $query = $this->model::latest();
        if (!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
        return $query->paginate(10);
    }

    public function getBlogPostBySlug(string $slug): Model
    {
        return $this->model::where('slug', $slug)->firstOrFail();
    }

}
