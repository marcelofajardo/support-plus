<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\Language;
use Modules\Setting\Repositories\LanguageRepositoryInterface;

class LanguageRepository extends BaseRepository implements LanguageRepositoryInterface
{
    public function __construct(Language $model)
    {
        $this->model = $model;
    }
}
