<?php

namespace Modules\Setting\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 *
 * @property $id
 * @property $code
 * @property $name
 * @property $native
 * @property $rtl
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin Builder
 */
class Language extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'name', 'native', 'rtl', 'status'];


}
