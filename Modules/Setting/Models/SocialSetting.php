<?php

namespace Modules\Setting\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

/**
 * Class SocialSetting
 *
 * @property $name
 * @property $link
 * @property $icon
 * @property $status
 *
 * @package App
 * @mixin Builder
 */
class SocialSetting extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'link', 'icon', 'status'];


    public static function boot()
    {
        parent::boot();

        static::created(function () {
            Cache::forget('socialMedia');
        });

        static::updated(function () {
            Cache::forget('socialMedia');
        });
        static::deleted(function () {
            Cache::forget('socialMedia');
        });
    }

}
