<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IsAdminOrSuperAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if (!isSuperAdmin() && !isAdmin()) {
            Session::flash('error', trans('common.Permission Denied'));
            return redirect()->back();

        }
        return $next($request);
    }
}
