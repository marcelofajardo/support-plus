<?php

namespace Modules\FrontendManager\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Testimonial extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'feedback', 'designation'];

    protected $perPage = 20;

    protected $fillable = ['name', 'feedback', 'image', 'designation'];


}
