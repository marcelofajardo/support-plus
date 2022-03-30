<?php

namespace Modules\FrontendManager\Models;

use Illuminate\Database\Eloquent\Model;


class Partner extends Model
{


    protected $perPage = 20;

    protected $fillable = ['name', 'image'];


}
