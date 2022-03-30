<?php

namespace Modules\FrontendManager\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Page extends Model
{
    use Sluggable;
    use HasTranslations;

    public $translatable = ['title', 'details'];
    protected $perPage = 20;
    protected $fillable = ['title', 'slug', 'details', 'status', 'footer1', 'footer2', 'menu'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
