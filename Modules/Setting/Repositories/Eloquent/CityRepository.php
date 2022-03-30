<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\City;
use Modules\Setting\Repositories\CityRepositoryInterface;

class CityRepository extends BaseRepository implements CityRepositoryInterface
{
    public function __construct(City $model)
    {
        $this->model = $model;
    }

    public function allCityByCurrentUserStateInArray($key = 'id', $value = 'name'): array

    {
        if (auth()->check()) {
            $state_id = auth()->user()->state_id;
        } else {
            $state_id = 0;
        }
        return $this->model::where('state_id', $state_id)->pluck($value, $key)->toArray();
    }

}
