<?php

namespace Modules\Setting\Repositories;

use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface UserRepositoryInterface extends EloquentRepositoryInterface
{
    public function userStore(array $data): Model;

    public function totalThisMonthUsers(): int;

    public function totalUsers(): int;

    public function recentJoin(): Collection;

    public function allActiveAdminInArray(): array;
}
