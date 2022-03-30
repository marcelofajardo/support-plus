<?php

namespace Modules\FrontendManager\Repositories;

use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface PageRepositoryInterface extends EloquentRepositoryInterface
{
    public function pageStore(array $data): Model;

    public function pageUpdate(int $id, array $data): bool;
}
