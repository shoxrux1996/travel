<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Config;
use Illuminate\Support\Facades\Session;

class Language
{
    public function handle($request, Closure $next)
    {
        if($request->hasCookie('language-silk-road')) {
            $cookie = $request->cookie('language-silk-road');
            if (in_array($cookie, Config::get('app.locales'))) {
	            $locale = $cookie;
	        } else
	            $locale = Config::get('app.locale');
            app()->setLocale($locale);
            Carbon::setLocale($locale);
            return $next($request);
        } else {
            $response = $next($request);
            $response->withCookie(cookie()->forever('language-silk-road', Config::get('app.locale')));
            return $response;
        }
    }

}