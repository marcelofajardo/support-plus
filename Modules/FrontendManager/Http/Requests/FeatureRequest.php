<?php

namespace Modules\FrontendManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'lang' => 'required',
            'details' => 'nullable',
            'image' => 'nullable',
            'thumb' => 'nullable',
            'order' => 'nullable',
        ];
    }
}
