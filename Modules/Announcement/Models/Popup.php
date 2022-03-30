<?php

namespace Modules\Announcement\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Popup extends Model
{

    use HasTranslations;

    public $translatable = ['title', 'text', 'button_text'];

    protected $perPage = 20;


    protected $fillable = ['name', 'image', 'bg', 'title', 'text', 'button_text', 'button_url', 'delay', 'order', 'status'];


}
