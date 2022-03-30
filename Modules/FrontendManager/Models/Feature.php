<?php

namespace Modules\FrontendManager\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Feature extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'details',];
    protected $perPage = 20;
    protected $fillable = ['name', 'details', 'image', 'thumb', 'status', 'order'];

}
