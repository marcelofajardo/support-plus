<?php

namespace Modules\FrontendManager\Repositories\Eloquent;

use App\Jobs\MailToSubscription;
use App\Repositories\Eloquent\BaseRepository;
use Modules\FrontendManager\Models\EmailSubscription;
use Modules\FrontendManager\Repositories\EmailSubscriptionRepositoryInterface;

class EmailSubscriptionRepository extends BaseRepository implements EmailSubscriptionRepositoryInterface
{
    protected $model;

    public function __construct(EmailSubscription $model)
    {
        $this->model = $model;
    }

    public function sendingRequest(array $mails, array $data): bool
    {
        foreach ($mails as $mail) {
            dispatch(new MailToSubscription($mail, $data));
        }
        return true;
    }

}
