<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Modules\Setting\Repositories\CookieRepositoryInterface;

class CookiePopup extends Component
{
    public $cookieRepository, $cookie;

    public function __construct(CookieRepositoryInterface $cookieRepository)
    {
        $this->cookieRepository = $cookieRepository;
    }

    public function render()
    {
        $this->cookie = $this->cookieRepository->findById(1);
        return view('components.cookie-popup');
    }
}
