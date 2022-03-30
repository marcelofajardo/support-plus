<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IsNotSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (isSuperAdmin()) {
            return redirect()->back();
        }
//        if (Auth::check() && isAdmin() && empty(Auth::user()->current_business_id)) {
//            return redirect()->route('frontendBusinessCreate');
//        }
        return $next($request);
    }
}
