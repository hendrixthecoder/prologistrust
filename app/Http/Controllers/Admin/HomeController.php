<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trade;
use App\Models\Withdraw;

class HomeController extends Controller
{
    public function index(){

    // User Info
    $widget['total_users'] = User::count();
    $widget['total_trades'] = Trade::count();
    $widget['won_trades'] = Trade::where('status', 'won')->count();
    $widget['lose_trades'] = Trade::where('status', 'lose')->count();
    $widget['total_deposits'] = Deposit::count();
    $widget['total_withdrawals'] = Withdraw::count();
    $widget['pending_deposits'] = Deposit::where('status', 'pending')->count();
    $widget['pending_withdrawals'] = Withdraw::where('status', 'pending')->count();

        return view('Admin.dashboard', compact('widget'));
    }
}
