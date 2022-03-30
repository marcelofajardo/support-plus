<?php

namespace Modules\Setting\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 *
 * @property $id
 * @property $name
 * @property $country_id
 * @property $state_id
 * @property $zone_id
 * @property $latitude
 * @property $longitude
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin Builder
 */
class City extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'country_id', 'state_id', 'zone_id', 'latitude', 'longitude'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id')->withDefault();
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id')->withDefault();
    }


}
