<?php

namespace Modules\FrontendManager\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{

    use HasTranslations;

    public $translatable = ['title', 'details',];

    protected $perPage = 20;

    protected $fillable = ['title', 'details', 'status'];


}
