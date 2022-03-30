<?php

namespace Modules\Setting\Repositories;

interface EmailSettingRepositoryInterface
{
    public function emailSettingStore(array $data): bool;
}
