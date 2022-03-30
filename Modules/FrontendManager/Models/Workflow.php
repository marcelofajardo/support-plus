<?php

namespace Modules\FrontendManager\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Workflow extends Model
{
    use HasTranslations;

    public $translatable = ['title'];

    protected $perPage = 20;


    protected $fillable = ['title', 'image', 'order'];


}
