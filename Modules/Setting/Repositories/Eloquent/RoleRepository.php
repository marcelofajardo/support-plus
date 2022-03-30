<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Models\Role;
use Modules\Setting\Repositories\RoleRepositoryInterface;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function roleStore($data): Model
    {
        $data['guard_name'] = 'web';
        return Role::create($data);
    }
}
