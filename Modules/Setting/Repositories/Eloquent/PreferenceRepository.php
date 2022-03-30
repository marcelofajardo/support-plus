<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\Preference;
use Modules\Setting\Repositories\PreferenceRepositoryInterface;

class PreferenceRepository extends BaseRepository implements PreferenceRepositoryInterface
{
    public function __construct(Preference $model)
    {
        $this->model = $model;
    }
}
