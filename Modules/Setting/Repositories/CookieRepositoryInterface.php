<?php

namespace Modules\Setting\Repositories;

use App\Repositories\EloquentRepositoryInterface;

interface CookieRepositoryInterface extends EloquentRepositoryInterface
{
    public function cookieUpdate(int $modelId, array $payload): bool;
}
