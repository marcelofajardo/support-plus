<?php

namespace Modules\Blog\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BlogPost extends Model
{

    use Sluggable;
    use HasTranslations;

    public $translatable = ['title', 'details'];
    protected $perPage = 20;

    protected $fillable = ['title', 'slug', 'details', 'category_id', 'image', 'thumb', 'status', 'view', 'is_home'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class)->withDefault();
    }

}
