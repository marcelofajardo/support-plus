<?php

namespace Modules\Setting\Repositories\Eloquent;


use Modules\Setting\Repositories\RecaptchaRepositoryInterface;

class RecaptchaRepository implements RecaptchaRepositoryInterface
{
    public function reCaptchaStore($data): bool
    {
        foreach ($data as $key => $item) {
            if ($key == 'sitekey') {
                $key = 'NOCAPTCHA_SITEKEY';
            } elseif ($key == 'secret') {
                $key = 'NOCAPTCHA_SECRET';
            } elseif ($key == 'login') {
                $key = 'LOGIN_NOCAPTCHA';
            } elseif ($key == 'reg') {
                $key = 'REG_NOCAPTCHA';
                $item = 'true';
            } elseif ($key == 'contact') {
                $key = 'CONTACT_NOCAPTCHA';
                $item = 'true';
            } elseif ($key == 'is_invisible') {
                $key = 'NOCAPTCHA_IS_INVISIBLE';
                $item = 'true';
            }
            updateEnv($key, $item);
        }

        if (!isset($data['login'])) {
            updateEnv('LOGIN_NOCAPTCHA', 'false');
        }
        if (!isset($data['reg'])) {
            updateEnv('REG_NOCAPTCHA', 'false');
        }
        if (!isset($data['contact'])) {
            updateEnv('CONTACT_NOCAPTCHA', 'false');
        }
        if (!isset($data['is_invisible'])) {
            updateEnv('NOCAPTCHA_IS_INVISIBLE', 'false');
        }
        return true;
    }
}
