<?php

namespace Modules\Setting\Repositories;

use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface RoleRepositoryInterface extends EloquentRepositoryInterface
{
    public function roleStore(array $data): Model;
}
