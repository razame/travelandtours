<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
use Illuminate\Support\Facades\Auth;

class Locale extends Middleware
{
    public function handle($request, Closure $next)
    {
        $locale = $request->session()->get('locale') ?? 'az';

        app()->setLocale($locale);

        return $next($request);
    }
}
