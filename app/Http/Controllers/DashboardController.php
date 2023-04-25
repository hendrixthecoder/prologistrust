<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use App\Models\Trade;
use App\Models\Invests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Monarobase\CountryList\CountryListFacade;

class DashboardController extends Controller
{
    public function dashboard(){
        $invests = Invests::where('user_id', Auth::User()->id)->get();
        $investments = Invests::where('user_id', Auth::User()->id)->where('status', 'running')->get();
        $countires = CountryListFacade::getList('en');

        $total_capital = 0;
        foreach($investments as $investment){
            $total_capital = $total_capital + $investment->amount;
        }
        $plan = Plans::all();

        $withdraws = DB::table('withdraws')->where('user_id', Auth::User()->id)->where('status', 'approved')->get();
        $total_withdraw = 0;
        foreach ($withdraws as $withdraw) {
            $total_withdraw = $total_withdraw + $withdraw->amount;
        }

        $numbers = [];
        for ($i = 0; $i < count($countires); $i++) {
            array_push($numbers, mt_rand(5, 200));
        }
        
        $num = 0;
        return view('User.dashboard',compact('investments','plan','total_withdraw','total_capital', 'countires','numbers','num','invests'));
    }
}
