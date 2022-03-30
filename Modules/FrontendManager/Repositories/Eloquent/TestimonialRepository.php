<?php

namespace Modules\FrontendManager\Repositories\Eloquent;

use App\Repositories\Eloquent\BaseRepository;
use App\Traits\ImageStore;
use Modules\FrontendManager\Models\Testimonial;
use Modules\FrontendManager\Repositories\TestimonialRepositoryInterface;

class TestimonialRepository extends BaseRepository implements TestimonialRepositoryInterface
{
    use ImageStore;

    protected $model;

    public function __construct(Testimonial $model)
    {
        $this->model = $model;
    }


}
