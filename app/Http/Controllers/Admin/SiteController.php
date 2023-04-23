<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{

    public function sitesettings(){
        $sitesettings = SiteSettings::all();
        return view('Admin.Settings.site_settings', compact('sitesettings'));
    }

    public function sitesettings_update(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'site_name'=>'required|max:191',
            'site_description'=>'required|max:191',
            'currency' => 'required|max:191',
            'currency_symbol' => 'required|max:191',
            'user_registration' => 'required|max:191',
            'email_verification' => 'required|max:191',
            'referral_status' => 'required|max:191',
            'site_email' => 'required|max:191',
            'site_phone' => 'required|max:191',
            'site_address' => 'required|max:191',
            'primary_colour' => 'required|max:191',
            'secondary_colour' => 'required|max:191',
            'demo_balance' => 'required|max:191',
            'trade_profit' => 'required|max:191',
            'referral_bonus' => 'required|max:191',

        ]);
        if($validator->fails())
        {
            return redirect('admin/settings/site_settings')
            ->with('errors', $validator->messages());
        }
        else
        {
           
          $sitesetting = SiteSettings::findorFail($id);
          $sitesetting->site_name = $request->input('site_name');
          $sitesetting->site_description = $request->input('site_description');
          $sitesetting->currency = $request->input('currency');
          $sitesetting->currency_symbol = $request->input('currency_symbol');
          $sitesetting->user_registration = $request->input('user_registration');
          $sitesetting->email_verification = $request->input('email_verification');
          $sitesetting->referral_status = $request->input('referral_status');
          $sitesetting->site_email = $request->input('site_email');
          $sitesetting->site_phone = $request->input('site_phone');
          $sitesetting->site_address = $request->input('site_address');
          $sitesetting->primary_colour = $request->input('primary_colour');
          $sitesetting->secondary_colour = $request->input('secondary_colour');
          $sitesetting->demo_balance = $request->input('demo_balance');
          $sitesetting->trade_profit = $request->input('trade_profit');
          $sitesetting->referral_bonus = $request->input('referral_bonus');
          $sitesetting->withlimit = $request->input('withlimit');
        
          $sitesetting->update();

          return redirect('admin/settings/site_settings')
          ->with('success', 'Site Settings Updated');
        }
         
    }


    public function logosettings(){

        return view('Admin.Settings.logo_settings', compact(''));
    }


     public function logoupload(Request $request){

          $logo = $request->file('logo');
          $favicon = $request->file('favicon');
          $filename = $request->file('logo')->getClientOriginalName();
          $filename = $request->file('$favicon')->getClientOriginalName();
          $logo->storeAs('images', $filename,'public');
          $favicon->storeAs('images', $filename, 'public');


        return view('Admin.Settings.logo_settings', compact(''));
    }


}
