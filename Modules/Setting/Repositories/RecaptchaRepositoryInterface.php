<?php

namespace Modules\Setting\Repositories;


interface RecaptchaRepositoryInterface
{
    public function reCaptchaStore($data): bool;
}
