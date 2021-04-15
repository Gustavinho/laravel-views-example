<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RedirectFromHerokuMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $domain = 'laravel-views.herokuapp.com';
        if (Str::contains(request()->url(), $domain)) {
            return redirect()->away('https://laravelviews.com/' . request()->path(), 301);
        }

        return $next($request);
    }
}
