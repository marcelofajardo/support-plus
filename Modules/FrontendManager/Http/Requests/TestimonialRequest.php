<?php

namespace Modules\FrontendManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'designation' => 'required',
            'feedback' => 'nullable',
            'image' => 'nullable',
            'lang' => 'required',
        ];
    }
}
