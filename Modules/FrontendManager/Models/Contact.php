<?php

namespace Modules\FrontendManager\Models;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{


    protected $perPage = 20;

    protected $fillable = ['name', 'email', 'message'];


}
