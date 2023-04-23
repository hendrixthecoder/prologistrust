<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Withdraw;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WithdrawController extends Controller
{
    public function withdraw(){
        $today = Carbon::now()->isoFormat('dddd');
        return view('User.Withdraw.withdraw', compact('today'));
    }

    public function withdraw_history(){
        $records = DB::table('withdraws')->where('user_id', Auth::User()->id)->get();
        $total = 0;
        
        foreach($records as $record){
            $total = $total + $record->amount;
        }
        
        return view('User.Withdraw.withdraw_history',compact('records','total'));
    }

    public function request_withdraw(Request $request){
        $nlance = User::find(Auth::User()->id);
        $validator = Validator::make($request->all(),[
            'wallet_address'=>'required|max:191',
            'amount'=>'required|max:191',
        ]);
        if($validator->fails())
        {
            return redirect('/user/withdraw')
            ->with('errors', $validator->messages());
        }
        else
        {
            $amount = $request->input('amount');
            $acc = $request->input('account_type');
            if ($amount > 14)
            {
                $settings = DB::table('site_settings')->where('id', '1')->first();
                if ($settings->withlimit == "enabled"){
                    if ($request->input('amount') > $nlance->withlimit)
                    {
                        return redirect()->back()
                        ->with('errors', "Withdraw limit is $".$nlance->withlimit);
                    }
                }
                if($acc == "profit")
                {
                    if($amount < Auth::user()->profit)
                    {
                        $balance = Auth::User()->profit - $amount;
                        $withdraw = new Withdraw();
                        $withdraw->trx_id = $request->input('trx_hash');
                        $withdraw->username = Auth::User()->firstname ." ". Auth::User()->lastname;
                        $withdraw->user_id = Auth::User()->id;
                        $withdraw->amount = $request->input('amount');
                        $withdraw->method = $request->input('wallet_type');
                        $withdraw->wallet_address = $request->input('wallet_address');
                        $withdraw->payable = $acc;
                        $withdraw->save();

                        $nlance->profit = $balance;
                        $nlance->withlimit = $nlance->withlimit - $request->input('amount');
                        if($nlance->withlimit < 0){
                             $nlance->withlimit = '0';
                        }
                        
                        $nlance->update();

                        return redirect('/user/withdraw_history')
                        ->with('success', "Withdraw request Submitted");
                    }
                    else
                    {
                        return redirect('/user/withdraw')
                        ->with('success', "Sorry you do not have sufficient balance in you profit wallet");
                    }
                }
                elseif($acc == "trading")
                {
                    if($amount < Auth::user()->rbalance)
                    {
                        $balance = Auth::User()->rbalance - $amount;
                        $withdraw = new Withdraw();
                        $withdraw->trx_id = $request->input('trx_hash');
                        $withdraw->username = Auth::User()->firstname ." ". Auth::User()->lastname;
                        $withdraw->user_id = Auth::User()->id;
                        $withdraw->amount = $request->input('amount');
                        $withdraw->method = $request->input('wallet_type');
                        $withdraw->wallet_address = $request->input('wallet_address');
                        $withdraw->payable = $acc;

                        $withdraw->save();

                        $nlance->rbalance = $balance;
                         $nlance->withlimit = $nlance->withlimit - $request->input('amount');
                         if($nlance->withlimit < 0){
                             $nlance->withlimit = '0';
                        }
                        $nlance->update();

                        return redirect('/user/withdraw_history')
                        ->with('success', "Withdraw request Submitted");
                    }
                    else
                    {
                        return redirect('/user/withdraw')
                        ->with('success', "Sorry you do not have sufficient balance in you trading wallet");
                    }
                }
                elseif($acc == "bonus")
                {
                    if($amount < Auth::user()->bonus)
                    {
                        $balance = Auth::User()->bonus - $amount;
                        $withdraw = new Withdraw();
                        $withdraw->trx_id = $request->input('trx_hash');
                        $withdraw->username = Auth::User()->firstname ." ". Auth::User()->lastname;
                        $withdraw->user_id = Auth::User()->id;
                        $withdraw->amount = $request->input('amount');
                        $withdraw->method = $request->input('wallet_type');
                        $withdraw->wallet_address = $request->input('wallet_address');
                        $withdraw->payable = $acc;
                        $withdraw->save();

                        $nlance->bonus = $balance;
                         $nlance->withlimit = $nlance->withlimit - $request->input('amount');
                         if($nlance->withlimit < 0){
                             $nlance->withlimit = '0';
                        }
                        $nlance->update();

                        return redirect('/user/withdraw_history')
                        ->with('success', "Withdraw request Submitted");
                    }
                    else
                    {
                        return redirect('/user/withdraw')
                        ->with('success', "Sorry you do not have sufficient balance in you Ref Bonus wallet");
                    }
                }
            }
            else
            {  
                return redirect('/user/withdraw')
                    ->with('errors', "The minimum amount withdrawable is 15 USD");
            }
        }
    }
}
