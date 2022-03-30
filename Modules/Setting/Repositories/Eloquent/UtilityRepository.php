<?php

namespace Modules\Setting\Repositories\Eloquent;


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Modules\Setting\Repositories\UtilityRepositoryInterface;

class UtilityRepository implements UtilityRepositoryInterface
{

    public function cacheClear(): void
    {
        Artisan::call('optimize:clear');
    }

    public function logClear(): void
    {
        File::delete(File::glob('storage/logs/*.log'));
    }
}
