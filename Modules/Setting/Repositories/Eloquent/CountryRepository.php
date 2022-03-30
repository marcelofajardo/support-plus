<?php

namespace Modules\Setting\Repositories\Eloquent;


use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\Country;
use Modules\Setting\Repositories\CountryRepositoryInterface;

class CountryRepository extends BaseRepository implements CountryRepositoryInterface
{
    public function __construct(Country $model)
    {
        $this->model = $model;
    }
}
