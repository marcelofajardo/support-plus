<?php

namespace Modules\Setting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecaptchaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'login' => 'nullable',
            'reg' => 'nullable',
            'contact' => 'nullable',
            'secret' => 'nullable',
            'sitekey' => 'nullable',
            'is_invisible' => 'nullable',
        ];
    }
}
