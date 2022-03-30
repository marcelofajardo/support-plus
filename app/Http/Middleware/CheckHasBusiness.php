<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckHasBusiness
{

    public function handle(Request $request, Closure $next)
    {
//        if (Auth::check() && isAdmin() && empty(Auth::user()->current_business_id) &&
//            !request()->is('business/business-create') &&
//            !request()->is('business/business-create')) {
//            return redirect()->route('frontendBusinessCreate');
//        }
        if (Auth::check() && isAdmin() && empty(Auth::user()->current_business_id) &&
            !request()->is('business/business-create') &&
            !request()->is('email*') &&
            !request()->is('logout') &&
            !request()->is('business/businesses*')) {
            return redirect()->route('frontendBusinessCreate');
        }
        return $next($request);
    }
}
