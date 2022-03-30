<?php

namespace Modules\Setting\Repositories;

interface UtilityRepositoryInterface
{
    public function cacheClear(): void;

    public function logClear(): void;
}
