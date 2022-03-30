<?php

namespace Modules\Setting\Repositories;

use App\Repositories\EloquentRepositoryInterface;

interface StateRepositoryInterface extends EloquentRepositoryInterface
{
    public function allStateByCurrentUserCountryInArray(): array;
}
