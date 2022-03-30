<?php

namespace Modules\FrontendManager\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use CreatedUpdatedBy;

    protected $perPage = 20;


    protected $fillable = ['name', 'primary', 'sub_primary', 'secondary', 'sub_secondary', 'tertiary', 'success', 'info', 'warning', 'danger', 'body_color', 'body_bg', 'sub_tertiary', 'sub_success', 'sub_info', 'sub_warning', 'sub_danger'];
}
