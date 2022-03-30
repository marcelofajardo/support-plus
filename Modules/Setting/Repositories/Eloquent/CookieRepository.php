<?php

namespace Modules\Setting\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Modules\Setting\Models\Cookie;
use Modules\Setting\Repositories\CookieRepositoryInterface;

class CookieRepository extends BaseRepository implements CookieRepositoryInterface
{
    protected $model;


    public function __construct(Cookie $model)
    {
        $this->model = $model;
    }

    public function cookieUpdate(int $modelId, array $payload): bool
    {
        {
            if (isset($payload['lang'])) {
                app()->setLocale($payload['lang']);
            }
            if (!empty($payload['status'])) {
                $payload['status'] = 1;
            } else {
                $payload['status'] = 0;
            }
            $cookie = $this->model::findOrFail($modelId);
            return $cookie->update($payload);
        }
    }
}
