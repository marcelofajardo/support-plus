<?php

namespace Modules\Setting\Repositories;

use App\Repositories\EloquentRepositoryInterface;

interface CityRepositoryInterface extends EloquentRepositoryInterface
{
    public function allCityByCurrentUserStateInArray(): array;
}
