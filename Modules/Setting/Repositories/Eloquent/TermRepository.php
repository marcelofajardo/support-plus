<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\Term;
use Modules\Setting\Repositories\TermRepositoryInterface;

class TermRepository extends BaseRepository implements TermRepositoryInterface
{
    public function __construct(Term $model)
    {
        $this->model = $model;
    }

}
