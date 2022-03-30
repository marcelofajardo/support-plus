<?php

namespace Modules\Setting\Repositories\Eloquent;


use Modules\Setting\Repositories\EmailSettingRepositoryInterface;

class EmailSettingRepository implements EmailSettingRepositoryInterface
{

    public function emailSettingStore(array $data): bool
    {
        foreach ($data as $key => $item) {
            updateEnv($key, $item);
        }
        return true;

    }
}
