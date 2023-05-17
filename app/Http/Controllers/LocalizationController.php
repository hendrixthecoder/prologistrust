<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLocale ($locale, Request $request) {

        if(array_key_exists($locale, Config::get('languages'))){
            App::setLocale($locale);
            if(Auth::check()){
                $user = $request->user();
                $user->locale = $locale;
                $user->save();

            }
            Session::put('locale', $locale);

        }else{
            return back()->with('error', 'Language not found');
        }

        return back()->with('success', 'Language changed successfully!');
    }
}
