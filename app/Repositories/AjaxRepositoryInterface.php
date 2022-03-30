<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface AjaxRepositoryInterface
{
    public function changeTableStatus(array $data): bool;

    public function getStatusByCountryId(int $country_id): Collection;
}
