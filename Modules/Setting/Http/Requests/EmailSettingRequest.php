<?php

namespace Modules\Setting\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailSettingRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'MAIL_MAILER' => 'nullable',
            'MAIL_HOST' => 'nullable',
            'MAIL_PORT' => 'nullable',
            'MAIL_ENCRYPTION' => 'nullable',
            'MAIL_USERNAME' => 'nullable',
            'MAIL_PASSWORD' => 'nullable',
            'MAIL_FROM_ADDRESS' => 'nullable',
        ];
    }
}
