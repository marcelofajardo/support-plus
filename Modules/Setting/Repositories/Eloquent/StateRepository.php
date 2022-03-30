<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\State;
use Modules\Setting\Repositories\StateRepositoryInterface;

class StateRepository extends BaseRepository implements StateRepositoryInterface
{
    public function __construct(State $model)
    {
        $this->model = $model;
    }

    public function allStateByCurrentUserCountryInArray($key = 'id', $value = 'name'): array
    {
        if (auth()->check()) {
            $country_id = auth()->user()->country_id;
        } else {
            $country_id = 0;
        }
        return $this->model::where('country_id', $country_id)->pluck($value, $key)->toArray();
    }
}
