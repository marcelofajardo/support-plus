<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\SocialSetting;
use Modules\Setting\Repositories\SocialSettingRepositoryInterface;

class SocialSettingRepository extends BaseRepository implements SocialSettingRepositoryInterface
{
    public function __construct(SocialSetting $model)
    {
        $this->model = $model;
    }
}
