<?php

namespace Modules\Setting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingRequest extends FormRequest
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
            'lang' => 'required',
            'app_name' => 'required',
            'app_title' => 'required',
            'logo' => 'nullable',
            'favicon' => 'nullable',
            'footer_about' => 'nullable',
            'contact_mail' => 'nullable',
            'copyright' => 'required',
            'trial_days' => 'nullable',
            'time_zone' => 'required',
            'meta_tag' => 'nullable',
            'currency' => 'required',
            'language_code' => 'required',
            'allow_multi_login' => 'required',
        ];
    }
}
