<?php

namespace Modules\Setting\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Class GeneralSetting
 *
 * @property $key
 * @property $value
 *
 * @package App
 * @mixin Builder
 */
class GeneralSetting extends Model
{


    use HasTranslations;

    public $translatable = ['value'];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['key', 'value'];


}
