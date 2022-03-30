<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\Zone;
use Modules\Setting\Repositories\ZoneRepositoryInterface;

class ZoneRepository extends BaseRepository implements ZoneRepositoryInterface
{
    public function __construct(Zone $model)
    {
        $this->model = $model;
    }
}
