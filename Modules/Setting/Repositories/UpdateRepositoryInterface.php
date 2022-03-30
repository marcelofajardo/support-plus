<?php

namespace Modules\Setting\Repositories;

use Illuminate\Support\Collection;

interface UpdateRepositoryInterface
{
    public function getAllUpdateVersion(): Collection;

    public function updateStore($data): array;
}
