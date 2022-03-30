<?php

namespace Modules\Setting\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 *
 * @property $id
 * @property $code
 * @property $name
 * @property $currency_name
 * @property $symbol
 *
 * @package App
 * @mixin Builder
 */
class Currency extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'name', 'currency_name', 'symbol'];


}
