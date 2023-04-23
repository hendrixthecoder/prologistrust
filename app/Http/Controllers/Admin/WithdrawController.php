<?php

namespace App\Http\Controllers\Admin;

use App\Models\Withdraw;
use Illuminate\Http\Request;
use App\Models\Withdrawmethod;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class WithdrawController extends Controller
{
    //Withdrawal

    public function all(){
        $page_title = 'Withdrawal Log';
        $withdrawal = Withdraw::all();
        return view('Admin.Withdrawals.index', compact('withdrawal', 'page_title'));
    }

    public function pending()
    {
        $page_title = 'Pending Withdrawal Log';
        $withdrawal = DB::table('withdraws')->where('status', 'pending')->get();
        return view('Admin.Withdrawals.index', compact('page_title','withdrawal'));
    }

     public function approved()
    {
        $page_title = 'Approved Withdrawal Log';
        $withdrawal = DB::table('withdraws')->where('status', 'approved')->get();
        return view('Admin.Withdrawals.index', compact('page_title','withdrawal'));
    }

    public function rejected()
    {
        $page_title = 'Rejected Withdrawal Log';
        $withdrawal = DB::table('withdraws')->where('status', 'rejected')->get();
        return view('Admin.Withdrawals.index', compact('page_title','withdrawal'));
    }


    public function methods(){
        $methods = Withdrawmethod::all();
        return view('Admin.Withdrawals.withdrawal_methods', compact('methods'));
    }

    public function addpage(){
        $metd = "post";
        $title = "New Withdraw Method";
        return view('Admin.Withdrawals.add',compact('metd','title'));
    }

    public function addmethod(Request $request){
        $validator = Validator::make($request->all(),[
            'method_name'=>'required|max:191',
            'currency'=>'required|max:191',
            'rate'=>'required|max:191',
            'min_amount'=>'required|max:191',
            'max_amount'=>'required|max:191',
            'fixed_charge'=>'required|max:191',
            'percent_charge'=>'required|max:191',
            'withdraw_instruction'=>'required|max:191',
        ]);
        if($validator->fails())
        {
            return redirect('/admin/withdrawals/methods/new')
            ->with('errors', $validator->messages());
        }
        else
        {
            $image=$request->file('method_image');
            $filename = $request->file('method_image')->getClientOriginalName();
            $image->storeAs('images',$filename,'public');

            $method = new Withdrawmethod();
            $method->method_name = $request->input('method_name');
            $method->currency = $request->input('currency');
            $method->rate = $request->input('rate');
            $method->min_amount = $request->input('min_amount');
            $method->max_amount = $request->input('max_amount');
            $method->fixed_charge = $request->input('fixed_charge');
            $method->percent_charge = $request->input('percent_charge');
            $method->withdraw_instruction = $request->input('withdraw_instruction');
            $method->method_image = $filename;

            $method->save();

            return redirect('/admin/withdrawals/methods/new')
            ->with('success', "Method added");
        }
    }

    public function edit($id){
        $method = Withdrawmethod::findOrFail($id);
        $metd = "put";
        $title = "Edit Withdraw Method";
        return view('Admin.Withdrawals.add',compact('metd','title','id','method'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'method_name'=>'required|max:191',
            'currency'=>'required|max:191',
            'rate'=>'required|max:191',
            'min_amount'=>'required|max:191',
            'max_amount'=>'required|max:191',
            'fixed_charge'=>'required|max:191',
            'percent_charge'=>'required|max:191',
            'withdraw_instruction'=>'required|max:191',
        ]);
        if($validator->fails())
        {
            return redirect('/admin/withdrawals/methods/new')
            ->with('errors', $validator->messages());
        }
        else
        {
            $image=$request->file('method_image');
            $filename = $request->file('method_image')->getClientOriginalName();
            $image->storeAs('images',$filename,'public');

            $method = Withdrawmethod::findOrFail($id);
            $method->method_name = $request->input('method_name');
            $method->currency = $request->input('currency');
            $method->rate = $request->input('rate');
            $method->min_amount = $request->input('min_amount');
            $method->max_amount = $request->input('max_amount');
            $method->fixed_charge = $request->input('fixed_charge');
            $method->percent_charge = $request->input('percent_charge');
            $method->withdraw_instruction = $request->input('withdraw_instruction');
            $method->method_image = $filename;

            $method->update();

            return redirect('/admin/withdrawals/methods/new')
            ->with('success', "Method updated");
        }
    }

    public function delete($id){
        $method = Withdrawmethod::findOrFail($id);

        $method->delete();
        return response()->json(['message'=>'Method deleted']);
    }

    public function updatestatus($id){
        $method = Withdrawmethod::findOrFail($id);
        if(strtolower($method->status) == "inactive"){
            $status = "active";
        }
        else{
            $status = "inactive";
        }
        
        $method->status = $status;
        $method->update();

        $methods = Withdrawmethod::all();

        foreach ($methods as $key => $value) {
            # code...
        }

        return response()->json(['message'=>'true','status' => $status, 'methods' => $methods]);
    }

    public function view (Request $request, $id)
    {
        $withdraw = DB::table('withdraws')->where('id', $id)->get();
        return view('Admin.Withdrawals.view', ['withdraw' => $withdraw]);
    }

    public function approvewithdraw ($id)
    {
        
        $withdraw = Withdraw::findOrFail($id);
        
        $user = User::findOrFail($withdraw->user_id);
        $details = array(
            'title' => 'Withdrawl Approved', 
            'name' => $user->username ,  
            'withdraw_amount' => $withdraw->amount ,
            'withdraw_trxid' => $withdraw->trx_id , 
            'withdraw_confirm' => $withdraw->updated_at , 
    );
       
        Mail::to($user->email)->send(new \App\Mail\WithdrawMail($details));

        $withdraw->status = 'approved';
        $withdraw->update();
       
       return redirect('/admin/withdraw/log')->with('success', 'Withdrawal Approved and Email Sent');
    }

    public function rejectwithdraw($id)
    {
        $withdraw = Withdraw::find($id);
        $acc = $withdraw->payable;
        $user = User::find($withdraw->user_id);
        if ( $acc == "profit")
        {
            $refund = $user->profit + $withdraw->amount;
            $user->profit = $refund;
            $user->update();

            $withdraw->status = 'rejected';
            $withdraw->update();

            return redirect('/admin/withdraw/log')->with('success', 'Withdrawal Rejected and Email Sent');
        }
        elseif ( $acc == "trading")
        {
            $refund = $user->rbalance + $withdraw->amount;
            $user->rbalance = $refund;
            $user->update();

            $withdraw->status = 'rejected';
            $withdraw->update();

            return redirect('/admin/withdraw/log')->with('success', 'Withdrawal Rejected and Email Sent');
        }
        elseif ( $acc == "bonus")
        {
            $refund = $user->bonus + $withdraw->amount;
            $user->bonus = $refund;
            $user->update();

            $withdraw->status = 'rejected';
            $withdraw->update();

            return redirect('/admin/withdraw/log')->with('success', 'Withdrawal Rejected and Email Sent');
        }
        else
        {
            return redirect()->back()
            ->with('success', 'Sorry you cannot reject this withdrawal');
        }
    }
}
