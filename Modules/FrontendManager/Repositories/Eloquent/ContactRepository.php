<?php

namespace Modules\FrontendManager\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\FrontendManager\Models\Contact;
use Modules\FrontendManager\Repositories\ContactRepositoryInterface;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    protected $model;

    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

}
