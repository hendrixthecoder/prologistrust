<?php

namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Gateway;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


class PaymentController extends Controller
{
    
    
    public function deposit()
    {
        $page_title = 'Deposit Methods';
        
        return view('User.Deposit.deposit', compact('page_title'));
    } 

    public function depositconfirm(Request $request)
    {
        $user = DB::table('users')->where('id', Auth::User()->id)->get();
        
        $amount = $request->input('amount');
        
        
        $image=$request->file('image');
        $filename = $request->file('image')->getClientOriginalName();
        $image->storeAs('images',$filename,'public');

        $depo = new Deposit();
        $depo->user_id = Auth::user()->id;
        $depo->username = Auth::user()->username;
        $depo->trx_id = Str::random(12);
        $depo->amount = $request->input('amount');
        $depo->method = $request->input('method');
        $depo->status = 'pending';
        $depo->image = $filename;
        
        $depo->save();

        return redirect('/user/deposit/history')->with('success', "Deposit request sent");;
    }

    public function deposithistory()
    {
        $page_title = 'Deposit History';
        $user = DB::table('users')->where('id', Auth::User()->id)
        ->get();
        $deposit = DB::table('deposits')->where('user_id', Auth::User()->id)->get();
        return view('User.Deposit.deposit_history', compact('page_title', 'deposit'));
    }

}
