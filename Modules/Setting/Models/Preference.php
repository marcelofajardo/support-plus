<?php

namespace Modules\Setting\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Class Preference
 *
 * @property $key
 * @property $text
 * @property $details
 * @property $status
 *
 * @package App
 * @mixin Builder
 */
class Preference extends Model
{
    use HasTranslations;

    public $translatable = ['text', 'details'];
    protected $perPage = 20;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['key', 'text', 'details', 'status'];


}
