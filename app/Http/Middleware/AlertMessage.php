<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlertMessage
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('success')) {
            toast(session('success'), 'success');
        }

        if (session('error')) {
            toast(session('error'), 'error');
        }

        if (session()->has('errors')) {
            $html = "<ul style='list-style: none;'>";
            foreach (session('errors')->all() as $error) {
                $html .= "<li>$error</li>";
            }
            $html .= "</ul>";
            toast($html, 'error');
        }

        return $next($request);
    }
}
