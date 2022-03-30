<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class SetLanguage
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $lang = $user->language_code ?? 'en';
        } else {

            if (session()->get('language_code')) {
                $lang = session()->get('language_code') ?? 'en';
            } else {
                $lang = app('generalSettings')['language_code'];
            }
        }
        App::setLocale($lang);
        return $next($request);
    }
}
