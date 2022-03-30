<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\GeneralSetting;
use Modules\Setting\Repositories\GeneralSettingRepositoryInterface;

class GeneralSettingRepository extends BaseRepository implements GeneralSettingRepositoryInterface
{

    public function __construct(GeneralSetting $model)
    {
        $this->model = $model;
    }

    public function generalSettingStore($data): void
    {
        app()->setLocale($data['lang']);
        foreach ($data as $key => $item) {
            if ($key == "app_name") {
                if ($data['lang'] == app('generalSettings')['language_code']) {
                    updateEnv('APP_NAME', $item);
                }
            }
            if ($key == "language_code") {
                updateEnv('APP_LANG', $item);
            }

            if ($key == "time_zone") {
                updateEnv('TIME_ZONE', $item);
            }


            if ($key != 'lang') {
                updateSetting($key, $item);
            }
        }

    }
}
