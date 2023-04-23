<?php

namespace App\Http\Controllers;

use App\Models\CryptoCurrency;
use App\Models\DemoTrade;
use App\Models\Trade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{
    public function demo_trade($id){
        $coins = DB::table('crypto_currencies')->where('status', 'active')->get();
        $stock = CryptoCurrency::find($id);
        return view('User.Trade.demo',compact('coins', 'stock'));
    }
    public function demo_history(){
        $records = DB::table('demohistory')->where('id', Auth::User()->id)->get();
        return view('User.demo_history',compact('records'));
    }

    public function trade(){
        $coins = DB::table('crypto_currencies')->where('status', 'active')->get();
        $records = Trade::where('username', Auth::user()->id)->get();
        $total_trades = Trade::where('username', Auth::user()->id)->count();
        $won_trades = DB::table('trades')->where('username', Auth::user()->id)->where('status', 'win')->get();
        $lose_trades = DB::table('trades')->where('username', Auth::user()->id)->where('status', 'loss')->get();
        return view('User.trade',compact('coins', 'total_trades','won_trades','lose_trades', 'records'));
    }
    public function trade_history(){
        $records = DB::table('trades')->where('username', Auth::User()->id)->get();
        return view('User.trade_history',compact('records'));
    }

    public function transaction_log(){
        $transactions = DB::table('transactions')->where('username', Auth::User()->id)->get();
        return view('User.transaction_log',compact('transactions'));
    }

    public function tradenow($id)
    {
        $stock = CryptoCurrency::find($id);
        return view('User.Trade.view', compact('stock'));
    }

    public function trd(){
        return view('User.Trade.trade');
    }

    public function commit(Request $request, $id)
    {
        $user = User::find($id);
        $balance = $user->rbalance - $request->input('trade_amount');
        $user->rbalance = $balance;
        $user->update();
        return response()->json([
            'status'=>200,
            'message'=>'trade can proceed',
            'time' => $request->input('duration'),
            'rbalance' => $user->rbalance,
            'dbalance' => $user->dbalance,
        ]);
    }

    public function dcommit(Request $request, $id)
    {
        $user = User::find($id);
        $balance = $user->dbalance - $request->input('trade_amount');
        $user->dbalance = $balance;
        $user->update();
        return response()->json([
            'status'=>200,
            'message'=>'trade can proceed',
            'time' => $request->input('duration'),
            'rbalance' => $user->rbalance,
            'dbalance' => $user->dbalance,
        ]);
    }

    public function transactionhistorycreate(Request $request, $id){
        $user = User::find($id);
        $stock = CryptoCurrency::find($request->input('stock_id'));
        $newbal = (30 / 100) * $request->input('trade_amount');
        $tbalance = $user->rbalance + $newbal;
        $history = new Trade();
        $history->username = $user->id;
        $history->currency = $stock->name;
        $history->symbol = $stock->symbol;
        $history->amount = $request->input('trade_amount');
        $history->in_time = $request->input('duration');
        $history->result = $request->input('highlow');
        $history->status = $request->input('result');
        $history->save();

        if ($request->input('result') == "win")
        {
            $user->rbalance = $tbalance;
            $user->update();
        }
        return response()->json([
            'status'=>200,
            'message'=>'trade history saved',
            'time' => $request->input('duration'),
            'accountbalance' => $user->rbalance,
        ]);
    }
    public function dtransactionhistorycreate(Request $request, $id){
        $user = User::find($id);
        $stock = CryptoCurrency::find($request->input('stock_id'));
        $newbal = (30 / 100) * $request->input('trade_amount');
        $tbalance = $user->dbalance + $newbal;
        $history = new Trade();
        $history->username = $user->id;
        $history->currency = $stock->name;
        $history->symbol = $stock->symbol;
        $history->amount = $request->input('trade_amount');
        $history->in_time = $request->input('duration');
        $history->result = $request->input('highlow');
        $history->status = $request->input('result');
        $history->save();

        if ($request->input('result') == "win")
        {
            $user->dbalance = $tbalance;
            $user->update();
        }
        return response()->json([
            'status'=>200,
            'message'=>'trade history saved',
            'time' => $request->input('duration'),
            'accountbalance' => $user->dbalance,
        ]);
    }
}
