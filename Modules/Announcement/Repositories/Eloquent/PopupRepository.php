<?php

namespace Modules\Announcement\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Announcement\Models\Popup;
use Modules\Announcement\Repositories\PopupRepositoryInterface;

class PopupRepository extends BaseRepository implements PopupRepositoryInterface
{
    protected $model;


    public function __construct(Popup $model)
    {
        $this->model = $model;
    }

}
