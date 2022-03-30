<?php

namespace Modules\Setting\Models;


use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Role extends Model
{

    use CreatedUpdatedBy;

    public $table = 'roles';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'guard_name'];


    /**
     * @return HasOne
     */
    public function modelHasRole()
    {
        return $this->hasOne('Modules\Setting\Models\ModelHasRole', 'role_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function roleHasPermissions()
    {
        return $this->hasMany('Modules\Setting\Models\RoleHasPermission', 'role_id', 'id');
    }


}
