<?php

namespace Modules\FrontendManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'lang' => 'required',
            'slug' => 'nullable',
            'details' => 'nullable',
            'status' => 'nullable',
            'menu' => 'nullable',
            'footer1' => 'nullable',
            'footer2' => 'nullable',
        ];
    }
}
