<?php

namespace Modules\FrontendManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'name' => 'required',
            'primary' => 'required',
            'sub_primary' => 'required',
            'secondary' => 'required',
            'sub_secondary' => 'required',
            'tertiary' => 'required',
            'success' => 'required',
            'info' => 'required',
            'warning' => 'required',
            'danger' => 'required',
            'body_color' => 'required',
            'body_bg' => 'required',
            'sub_tertiary' => 'required',
            'sub_success' => 'required',
            'sub_info' => 'required',
            'sub_warning' => 'required',
            'sub_danger' => 'required',
        ];
    }
}
