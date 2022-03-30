<?php

namespace App\Repositories\Eloquent;

use App\Repositories\EloquentRepositoryInterface;
use App\Traits\ImageStore;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface
{
    use ImageStore;

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(array $columns = ['*'], array $relations = []): Collection
    {
        return $this->model->with($relations)->get($columns);
    }

    public function allActive(array $columns = ['*'], array $relations = []): Collection
    {
        return $this->model->with($relations)->where('status', 1)->get($columns);
    }

    public function allInActive(array $columns = ['*'], array $relations = []): Collection
    {
        return $this->model->with($relations)->where('status', 0)->get($columns);
    }

    public function allWithPaginate(int $parPage = 20, array $relations = []): object
    {
        return $this->model->with($relations)->paginate($parPage);
    }

    public function allTrashed(): Collection
    {
        return $this->model->onlyTrashed()->get();
    }

    public function newObject(): ?Model
    {
        return $this->model = new $this->model;
    }

    public function store(array $payload): ?Model
    {
        if (isset($payload['lang'])) {
            app()->setLocale($payload['lang']);
        }
        if (isset($payload['image']) && !empty($payload['image'])) {
            $payload['image'] = $this->saveImage($payload['image']);
        }
        if (isset($payload['thumb']) && !empty($payload['thumb'])) {
            $payload['thumb'] = $this->saveImage($payload['thumb']);
        }
        if (isset($payload['bg']) && !empty($payload['bg'])) {
            $payload['bg'] = $this->saveImage($payload['bg']);
        }

        $model = $this->model->create($payload);

        return $model->fresh();
    }

    public function update(int $modelId, array $payload): bool
    {
        if (isset($payload['lang'])) {
            app()->setLocale($payload['lang']);
        }
        if (isset($payload['image']) && !empty($payload['image'])) {
            $payload['image'] = $this->saveImage($payload['image']);
        }
        if (isset($payload['thumb']) && !empty($payload['thumb'])) {
            $payload['thumb'] = $this->saveImage($payload['thumb']);
        }
        if (isset($payload['bg']) && !empty($payload['bg'])) {
            $payload['bg'] = $this->saveImage($payload['bg']);
        }
        $model = $this->findById($modelId);

        return $model->update($payload);
    }

    public function findById(
        int   $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ): ?Model
    {
        return $this->model->select($columns)->with($relations)->findOrFail($modelId)->append($appends);
    }

    public function deleteById(int $modelId): bool
    {
        return $this->findById($modelId)->delete();
    }

    public function restoreById(int $modelId): bool
    {
        return $this->findOnlyTrashedById($modelId)->restore();
    }

    public function findOnlyTrashedById(int $modelId): ?Model
    {
        return $this->model->onlyTrashed()->findOrFail($modelId);
    }

    public function permanentlyDeleteById(int $modelId): bool
    {
        return $this->findTrashedById($modelId)->forceDelete();
    }

    public function findTrashedById(int $modelId): ?Model
    {
        return $this->model->withTrashed()->findOrFail($modelId);
    }

    public function allInArray($key = 'id', $value = 'name'): array
    {
        return $this->model::pluck($value, $key)->toArray();
    }

    public function allActiveInArray($key = 'id', $value = 'name'): array
    {
        return $this->model::where('status', 1)->pluck($value, $key)->toArray();
    }
}
