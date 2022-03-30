<?php

namespace Modules\Setting\Repositories;

use App\Repositories\EloquentRepositoryInterface;

interface GeneralSettingRepositoryInterface extends EloquentRepositoryInterface
{
    public function generalSettingStore($data): void;
}
