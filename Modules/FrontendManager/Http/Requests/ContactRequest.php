<?php

namespace Modules\FrontendManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if (config('captcha.contact')) {
            $rules = [
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
                'g-recaptcha-response' => ['required', 'captcha']
            ];
        } else {
            $rules = [
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ];
        }
        return $rules;
    }
}
