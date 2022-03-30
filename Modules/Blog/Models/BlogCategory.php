<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class BlogCategory extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $perPage = 20;

    protected $fillable = ['name'];


}
