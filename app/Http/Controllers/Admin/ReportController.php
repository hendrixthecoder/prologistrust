<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Transaction;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class ReportController extends Controller
{
    
    public function transactionlog(){
        $page_title = 'Transaction Log';
        $transaction = Transaction::all();
        return view('Admin.Reports.transactionlog', compact('transaction', 'page_title'));
    }
}
