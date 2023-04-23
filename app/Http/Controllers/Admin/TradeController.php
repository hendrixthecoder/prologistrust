<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CryptoCurrency;
use App\Models\DemoTrade;
use App\Models\TradeSettings;
use App\Models\SiteSettings;
use App\Models\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TradeController extends Controller
{

    // Trade Settings

    public function tradesettings(){
        $tradesettings = TradeSettings::all();
        return view('Admin.Settings.trade_settings', compact('tradesettings'));
    }

     public function tradesettings_save(Request $request){

        $validator = Validator::make($request->all(),[
            'trade_time'=>'required|max:191',
            'trade_unit'=>'required|max:191',

        ]);
        if($validator->fails())
        {
            return redirect('Admin/Settings/trade_settings')
            ->with('errors', $validator->messages());
        }
        else
        {


          $trade_setting = new TradeSettings;
          $trade_setting->time = $request->input('trade_time');
          $trade_setting->unit= $request->input('trade_unit');

          $trade_setting->save();

          return redirect('admin/settings/trade_settings')
          ->with('success', 'Trade Settings Created');
        }

    }

    public function tradesettings_edit(Request $request, $id){

        $tradesettings= DB::table('trade_settings')->where('id', $id)->get();
        return view('Admin.Settings.edit_trade_settings', compact('tradesettings'))
        ->with('tradesettings', $tradesettings);

    }

    public function tradesettings_update(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'trade_time'=>'required|max:191',
            'trade_unit'=>'required|max:191',

        ]);
        if($validator->fails())
        {
            return redirect('Admin/Settings/trade_settings')
            ->with('errors', $validator->messages());
        }
        else
        {

          $t_setting = TradeSettings::findorFail($id);
          $t_setting->time = $request->input('trade_time');
          $t_setting->unit= $request->input('trade_unit');

          $t_setting->update();

          return redirect('admin/settings/trade_settings')
          ->with('success', 'Trade Settings Updated');
        }

    }

    public function tradesettings_delete ($id)
    {
        $t_set = TradeSettings::findOrFail($id);

        $t_set->delete();

        return redirect('/admin/settings/trade_settings')->with('success', 'Trade Settings Deleted');
    }


    // Crypto Currency

    public function cryptolist() {

        $cryptocurrencies = CryptoCurrency::all();
        return view('Admin.Settings.crypto_list', compact('cryptocurrencies'));
    }

    public function crypto_save(Request $request){

        $validator = Validator::make($request->all(),[
            'currency_name'=>'required|max:191',
            'coin_symbol'=>'required|max:191',
            'status'=>'required|max:191',

        ]);
        if($validator->fails())
        {
            return redirect('Admin/Settings/crypto_list')
            ->with('errors', $validator->messages());
        }
        else
        {
          $image=$request->file('image');
          $filename = $request->file('image')->getClientOriginalName();
          $image->storeAs('images',$filename,'public');

          $cryptocurrency = new CryptoCurrency;
          $cryptocurrency->name = $request->input('currency_name');
          $cryptocurrency->symbol = $request->input('coin_symbol');
          $cryptocurrency->status = $request->input('status');
          $cryptocurrency->image = $filename;

          $cryptocurrency->save();

          return redirect('admin/settings/crypto_list')
          ->with('success', 'CryptoCurrency Created');
        }

    }

     public function crypto_edit(Request $request, $id){

            $cryptocurrencies = DB::table('crypto_currencies')->where('id', $id)->get();
            return view('Admin.Settings.edit_crypto_list', compact('cryptocurrencies'))
            ->with('cryptocurrencies', $cryptocurrencies);

    }

     public function crypto_update(Request $request, $id) {

        $validator = Validator::make($request->all(),[
            'currency_name'=>'required|max:191',
            'coin_symbol'=>'required|max:191',
            'status'=>'required|max:191',

        ]);
        if($validator->fails())
        {
            return redirect('Admin/Settings/crypto_list')
            ->with('errors', $validator->messages());
        }
        else
        {
          $image=$request->file('image');
          $filename = $request->file('image')->getClientOriginalName();
          $image->storeAs('images',$filename,'public');

          $cryptocurrency = CryptoCurrency::findorFail($id);
          $cryptocurrency->name = $request->input('currency_name');
          $cryptocurrency->symbol = $request->input('coin_symbol');
          $cryptocurrency->status = $request->input('status');
          $cryptocurrency->image = $filename;

          $cryptocurrency->update();

          return redirect('admin/settings/crypto_list')
          ->with('success', 'CryptoCurrency Updated');
        }


    }

    public function crypto_delete ($id)
    {
        $cryptocurrency = CryptoCurrency::findOrFail($id);

        $cryptocurrency->delete();

        return redirect('/admin/settings/crypto_list')->with('success', 'CryptoCurrency Deleted');
    }


    // Demo Trade

    public function demotrade(){
        $page_title = 'Demo Trade Log';
        $demotrades = DemoTrade::all();
        return view('Admin.Trade.demo_trade', compact('demotrades', 'page_title'));
    }

    public function demotrade_win()
    {
        $page_title = 'Demo Winning Trade Log';
        $demotrades= DemoTrade::where('status', 'win');
        return view('Admin.Trade.demo_trade', compact('page_title','demotrades'));
    }

     public function demotrade_lose()
    {
        $page_title = 'Demo Losing Trade Log';
        $demotrades= DemoTrade::where('status', 'lose');
        return view('Admin.Trade.demo_trade', compact('page_title','demotrades'));
    }

    public function demotrade_draw()
    {
        $page_title = 'Demo Draw Trade Log';
        $demotrades= DemoTrade::where('status', 'draw');
        return view('Admin.Trade.demo_trade', compact('page_title','demotrades'));
    }

    //Trade

    public function trade(){
        $page_title = 'Trade Log';
        $trades = Trade::all();
        return view('Admin.Trade.live_trade', compact('trades', 'page_title'));
    }

    public function trade_win()
    {
        $page_title = 'Winning Trade Log';
        $trades= Trade::where('status', 'win');
        return view('Admin.Trade.live_trade', compact('page_title','trades'));
    }

     public function trade_lose()
    {
        $page_title = 'Losing Trade Log';
        $trades= Trade::where('status', 'lose');
        return view('Admin.Trade.live_trade', compact('page_title','trades'));
    }

    public function trade_draw()
    {
        $page_title = 'Draw Trade Log';
        $trades= Trade::where('status', 'draw');
        return view('Admin.Trade.live_trade', compact('page_title','trades'));
    }

    public function demotradenow($id)
    {
        $stock = CryptoCurrency::find($id);
        return view('User.Trade.demo', compact('stock'));
    }
}
