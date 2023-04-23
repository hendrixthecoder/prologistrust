<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Deposit;
use App\Models\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class DepositController extends Controller
{
    public function index ()
    {
        $gateway = Gateway::all();
        
        return view('Admin.Gateway.Manual.manual_deposit', compact('gateway'));
    }

    public function create (Request $request)
    {
        $validator = Validator::make($request->all(),[
            'gatewayname'=>'required|max:191',
            'minimum'=>'required|max:191',
            'maximum'=>'required|max:191',
            'status'=>'required|max:191',
            'instruction'=>'required|max:225',
        ]);
        if($validator->fails())
        {
            return redirect('/admin/gateway/manual')
            ->with('errors', $validator->messages());
        }
        else
        {
          $image=$request->file('image');
          $filename = $request->file('image')->getClientOriginalName();
          $image->storeAs('images',$filename,'public');
          
          $gateway = new Gateway;
          $gateway->name = $request->input('gatewayname');
          $gateway->minimum = $request->input('minimum');
          $gateway->maximum = $request->input('maximum');
          $gateway->status = $request->input('status');
          $gateway->instruction = $request->input('instruction');
          $gateway->image = $filename;

          $gateway->save();

          return redirect('/admin/gateway/manual')
          ->with('success', 'Gateway Created');
        }

        
    }
    public function edit ($id)
        {
            $gateway = DB::table('gateways')->where('id', $id)->get();

            return view('Admin.Gateway.Manual.edit', compact('gateway'))
            ->with('gateway', $gateway);
        }
    public function update (Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'gatewayname'=>'required|max:191',
            'minimum'=>'required|max:191',
            'maximum'=>'required|max:191',
            'status'=>'required|max:191',
            'instruction'=>'required|max:225',
        ]);
        if($validator->fails())
        {
            return redirect('/admin/gateway/manual')
            ->with('errors', $validator->messages());
        }
        else
        {
          $image=$request->file('image');
          $filename = $request->file('image')->getClientOriginalName();
          $image->storeAs('images',$filename,'public');
          
          $gateway = Gateway::findOrFail($id);
          $gateway->name = $request->input('gatewayname');
          $gateway->minimum = $request->input('minimum');
          $gateway->maximum = $request->input('maximum');
          $gateway->status = $request->input('status');
          $gateway->instruction = $request->input('instruction');
          $gateway->image = $filename;

          $gateway->update();
          notify()->success("Gateway updated","Success","topRight");
          return redirect('/admin/gateway/manual');
        }
    }

    public function delete ($id)
    {
        $gateway = Gateway::findOrFail($id);

        $gateway->delete();
        return redirect('/admin/gateway/manual')->with('success', 'Gateway Deleted');
    }

    public function all(){
        $page_title = 'Deposit Log';
        $deposit = DB::table('deposits')->orderByRaw('updated_at - created_at ASC')->get();
        return view('Admin.Deposits.index', compact('deposit', 'page_title'));
    }

    public function pending()
    {
        $page_title = 'Pending Deposit Log';
        $deposit = DB::table('deposits')->where('status', 'pending')->orderByRaw('updated_at - created_at ASC')->get();
        return view('Admin.Deposits.index', compact('page_title','deposit'));
    }

     public function approved()
    {
        $page_title = 'Approved Deposit Log';
        $deposit = DB::table('deposits')->where('status', 'approved')->orderByRaw('updated_at - created_at ASC')->get();
        return view('Admin.Deposits.index', compact('page_title','deposit'));
    }

    public function rejected()
    {
        $page_title = 'Rejected Deposit Log';
        $deposit = DB::table('deposits')->where('status', 'rejected')->orderByRaw('updated_at - created_at ASC')->get();
        return view('Admin.Deposits.index', compact('page_title','deposit'));
    }

    public function view($id)
    {
        $duser = Deposit::findOrFail($id);
        $deposit = DB::table('deposits')->where('id', $id)->get();
        

        $user = DB::table('users')->where('id', $duser->user_id)->get();

        return view('Admin.Deposits.view', ['user' => $user])
        ->with('deposit', $deposit);
    }

    public function approvedeposite($id)
    {
        $deposit = Deposit::findOrFail($id);
        
        $user = User::findOrFail($deposit->user_id);
        $details = array(
            'title' => 'Deposit Approved', 
            'name' => $user->username ,  
            'withdraw_amount' => $deposit->amount ,
            'withdraw_trxid' => $deposit->trx_id , 
            'withdraw_confirm' => $deposit->updated_at , 
    );
       
        Mail::to($user->email)->send(new \App\Mail\DepositMail($details));

        $deposit->status = 'approved';
        $deposit->update();
        $nbalance = $user->rbalance + $deposit->amount;
        $user->rbalance = $nbalance;
        $user->update();
       
       return redirect('/admin/deposit/log')->with('success', 'Deposit Approved');
    }

    public function rejectdeposite($id)
    {
        $deposit = Deposit::find($id);
        $deposit->status = 'rejected';
        $deposit->update();
        return redirect('/admin/deposit/log')->with('success', 'Deposit Rejected');
    }

}