<?php

namespace Modules\Blog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'category_id' => 'required',
            'details' => 'nullable',
            'image' => 'nullable',
            'lang' => 'required'
        ];
    }
}
