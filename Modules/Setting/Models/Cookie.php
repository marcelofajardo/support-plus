<?php

namespace Modules\Setting\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Cookie extends Model
{
    use HasTranslations;

    public $translatable = ['text', 'btn'];
    protected $perPage = 20;
    protected $fillable = ['text', 'btn', 'status'];


}
