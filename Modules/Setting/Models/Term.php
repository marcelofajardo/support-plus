<?php

namespace Modules\Setting\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Class Term
 *
 * @property $details
 *
 * @package App
 * @mixin Builder
 */
class Term extends Model
{

    use HasTranslations;

    public $translatable = ['details'];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['details'];


}
