<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\IpBlock;
use Modules\Setting\Repositories\IpBlockRepositoryInterface;

class IpBlockRepository extends BaseRepository implements IpBlockRepositoryInterface
{
    public function __construct(IpBlock $model)
    {
        $this->model = $model;
    }
}
