<?php

namespace Modules\FrontendManager\Models;

use Illuminate\Database\Eloquent\Model;

class EmailSubscription extends Model
{


    protected $perPage = 20;

    protected $fillable = ['email'];


}
