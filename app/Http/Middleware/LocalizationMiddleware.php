<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if(Auth::check()){
        //     if(Auth::user()->locale){
        //         App::setLocale(Auth::user()->locale);
        //     }else {
        //         App::setLocale('en');
        //     }
        // }elseif(Session::has('locale') && array_key_exists(Session::get('locale'), Config::get('languages'))){
        //     App::setLocale(Session::get('locale'));
        // }

        return $next($request);
    }
}
