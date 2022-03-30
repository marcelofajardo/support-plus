<?php

namespace Modules\Announcement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PopupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'text' => 'nullable',
            'image' => 'nullable',
            'bg' => 'nullable',
            'button_text' => 'nullable',
            'button_url' => 'nullable',
            'delay' => 'required',
            'order' => 'nullable',
            'lang' => 'required'
        ];
    }
}
