<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class Secure
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->secure() && !str_contains($request->getRequestUri(), '/podcasts/rss')) {
            return redirect()->secure($request->getRequestUri(), 301);
        }

        return $next($request);
    }
}
