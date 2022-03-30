<?php

namespace Modules\FrontendManager\Repositories;

use App\Repositories\EloquentRepositoryInterface;

interface EmailSubscriptionRepositoryInterface extends EloquentRepositoryInterface
{
    public function sendingRequest(array $mails, array $data): bool;
}
