<?php

return [
    'login' => env('LOGIN_NOCAPTCHA', false),
    'reg' => env('REG_NOCAPTCHA', false),
    'contact' => env('CONTACT_NOCAPTCHA', false),
    'secret' => env('NOCAPTCHA_SECRET'),
    'sitekey' => env('NOCAPTCHA_SITEKEY'),
    'is_invisible' => env('NOCAPTCHA_IS_INVISIBLE', false),
    'options' => [
        'timeout' => 30,
    ],
];
