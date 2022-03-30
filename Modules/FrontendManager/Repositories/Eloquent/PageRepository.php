<?php

namespace Modules\FrontendManager\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Modules\FrontendManager\Models\Page;
use Modules\FrontendManager\Repositories\PageRepositoryInterface;
use function app;

class PageRepository extends BaseRepository implements PageRepositoryInterface
{
    protected $model;

    public function __construct(Page $model)
    {
        $this->model = $model;
    }


    public function pageStore(array $data): Model
    {
        app()->setLocale($data['lang']);
        if (!isset($data['menu'])) {
            $data['menu'] = 0;
        }
        if (!isset($data['footer1'])) {
            $data['footer1'] = 0;
        }
        if (!isset($data['footer2'])) {
            $data['footer2'] = 0;
        }
        return Page::create($data);
    }

    public function pageUpdate(int $id, array $data): bool
    {
        app()->setLocale($data['lang']);
        if (!isset($data['menu'])) {
            $data['menu'] = 0;
        }
        if (!isset($data['footer1'])) {
            $data['footer1'] = 0;
        }
        if (!isset($data['footer2'])) {
            $data['footer2'] = 0;
        }
        return Page::findOrFail($id)->update($data);
    }

}
