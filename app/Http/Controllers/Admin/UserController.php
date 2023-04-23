<?php

namespace App\Http\Controllers\Admin;


use Carbon\Carbon;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Monarobase\CountryList\CountryListFacade;

class UserController extends Controller
{

    public Function index () {
        $title = 'All users';
        $users = User::latest()->paginate(1000);
        return view('Admin.Users.index', compact('users','title'))
        ->with('users',$users, (request()->input('page', 1) - 1) * 5);
    }

    public function showuser(Request $request, $id){
        $user = User::findOrFail($id);
        $countries = CountryListFacade::getList('en');
        $transactions = DB::table('transactions')->where('username', $id)->get();
        return view('Admin.Users.show', compact('user', 'transactions', 'countries'));
    }

    public function adduserpage(){
        $countries = CountryListFacade::getList('en');
        return view('Admin.Users.adduser', compact('countries'));
    }

    public function adduser(Request $request){
        $validator = Validator::make($request->all(),[
            'firstname'=>'required|max:191',
            'lastname'=>'required|max:191',
            'email'=>'required|max:191',
            'username'=>'required|max:191',
            'phone'=>'required|max:191',
            'country'=>'required|max:191',
            'password'=>'required|max:191',
            'confirmpass'=>'required|max:191',
        ]);
        if($validator->fails())
        {
            return redirect('/admin/users/adduser')
            ->with('errors', $validator->messages());
        }
        else
        {

            if($request->input('password') === $request->input('confirmpass')){
                $user = new User;
                $user->firstname = $request->input('firstname');
                $user->lastname = $request->input('lastname');
                $user->email = $request->input('email');
                $user->username = $request->input('username');
                $user->phone = $request->input('phone');
                $user->country = $request->input('country');
                $user->password = Hash::make($request->input('password'));

                $user->save();

                return redirect('/admin/users/adduser')
                ->with('success', 'User added');
            }
            else{
                return redirect('/admin/users/adduser')
                ->with('errors', "Passwords doesn't match");
            }

        }
    }

    public function deleteuser(Request $request, $id){
        $del_user = User::findOrFail($id);
        $invest = DB::table('invests')->where('user_id', $del_user->id)->delete();
        $del_user->delete();

        return redirect('admin/users')
        ->with('success', 'User Deleted');
    }

    public function verified(){
        $users = DB::table('users')->whereNotNull('email_verified_at')->get();
        $title = 'Verified users';
        return view('Admin.Users.index', compact('users','title'));
    }

    public function unverified(){
        $title = 'Unverified users';
        $users = DB::table('users')->whereNull('email_verified_at')->get();
        return view('Admin.Users.index', compact('users','title'));
    }

    public function unblock($id){
        $user = User::find($id);
        $user->status = 'active';
        $user->update();

        return redirect()->back()
        ->with('success', 'User Unblocked');
    }

    public function block($id){
        $user = User::find($id);
        $user->status = 'blocked';
        $user->update();

        return redirect()->back()
        ->with('success', 'User Blocked');
    }

    public function verify ($id)
    {
        $user = User::find($id);

        $user->email_verified_at = Carbon::now();

        $user->update();

        return redirect()->back()
        ->with('success', 'User Verified');
    }

    public function creditdebit (Request $request, $id)
    {
        $user = User::find($id);
        $trx_id = Str::random(12);

        if ($request->trx_type == "1")
        {
            if( $request->trx_column == "1")
            {
                $user->rbalance = ($user->rbalance + $request->trx_amount);
                $user->update();

                //create transaction history
                $thistory = new Transaction;
                $thistory->trx_id = $trx_id;
                $thistory->username = $user->id;
                $thistory->amount = $request->trx_amount;
                $thistory->balance = $user->rbalance;
                $thistory->type = $request->trx_type;
                $thistory->detail = $request->trx_detail;
                $thistory->save();


                return redirect()->back()
                ->with('success', 'User Account Credited');
            }
            elseif ($request->trx_column == "0")
            {

                $user->dbalance = ($user->dbalance + $request->trx_amount);
                $user->update();

                return redirect()->back()
                ->with('success', 'User Account Credited');
            }
            elseif ($request->trx_column == "3")
            {

                $user->profit = ($user->profit + $request->trx_amount);
                $user->update();

                //create transaction history
                $thistory = new Transaction;
                $thistory->trx_id = $trx_id;
                $thistory->username = $user->id;
                $thistory->amount = $request->trx_amount;
                $thistory->balance = $user->profit;
                $thistory->type = $request->trx_type;
                $thistory->detail = $request->trx_detail;
                $thistory->save();

                return redirect()->back()
                ->with('success', 'User Account Credited');
            }
            elseif ($request->trx_column == "4")
            {

                $user->bonus = ($user->bonus + $request->trx_amount);
                $user->update();

                //create transaction history
                $thistory = new Transaction;
                $thistory->trx_id = $trx_id;
                $thistory->username = $user->id;
                $thistory->amount = $request->trx_amount;
                $thistory->balance = $user->bonus;
                $thistory->type = $request->trx_type;
                $thistory->detail = $request->trx_detail;
                $thistory->save();

                return redirect()->back()
                ->with('success', 'User Account Credited');
            }

        }
        else
        {
            if( $request->trx_column == "1")
            {
                if ($user->rbalance < $request->trx_amount)
                {
                    return redirect()->back()
                    ->with('success', 'Insuficient Balance');
                }
                else
                {
                  $user->rbalance = ($user->rbalance - $request->trx_amount);
                    $user->update();

                    //create transaction history
                    $thistory = new Transaction;
                    $thistory->trx_id = $trx_id;
                    $thistory->username = $user->id;
                    $thistory->amount = $request->trx_amount;
                    $thistory->balance = $user->rbalance;
                    $thistory->type = $request->trx_type;
                    $thistory->detail = $request->trx_detail;
                    $thistory->save();


                    return redirect()->back()
                    ->with('success', 'User Account Debited');
                }

            }
            elseif( $request->trx_column == "0")
            {
                if ($user->dbalance < $request->trx_amount)
                {
                    return redirect()->back()
                    ->with('success', 'Insuficient Balance');
                }
                else
                {
                  $user->dbalance = ($user->dbalance - $request->trx_amount);
                    $user->update();

                    return redirect()->back()
                    ->with('success', 'User Account Debited');
                }

            }
            elseif( $request->trx_column == "3")
            {
                if ($user->profit < $request->trx_amount)
                {
                    return redirect()->back()
                    ->with('success', 'Insuficient Balance');
                }
                else
                {
                  $user->profit = ($user->profit - $request->trx_amount);
                    $user->update();

                    //create transaction history
                    $thistory = new Transaction;
                    $thistory->trx_id = $trx_id;
                    $thistory->username = $user->id;
                    $thistory->amount = $request->trx_amount;
                    $thistory->balance = $user->profit;
                    $thistory->type = $request->trx_type;
                    $thistory->detail = $request->trx_detail;
                    $thistory->save();


                    return redirect()->back()
                    ->with('success', 'User Account Debited');
                }

            }
            elseif( $request->trx_column == "4")
            {
                if ($user->bonus < $request->trx_amount)
                {
                    return redirect()->back()
                    ->with('success', 'Insuficient Balance');
                }
                else
                {
                  $user->bonus = ($user->bonus - $request->trx_amount);
                    $user->update();

                    //create transaction history
                    $thistory = new Transaction;
                    $thistory->trx_id = $trx_id;
                    $thistory->username = $user->id;
                    $thistory->amount = $request->trx_amount;
                    $thistory->balance = $user->bonus;
                    $thistory->type = $request->trx_type;
                    $thistory->detail = $request->trx_detail;
                    $thistory->save();


                    return redirect()->back()
                    ->with('success', 'User Account Debited');
                }

            }

        }
    }

    public function emailuser(Request $request, $id)
    {
        $user = User::find($id);
        $subject = $request->input('subject');
        $details = array(
            'message' => $request->input('message'),
            'name' => $user->username ,
            'subject' => $request->input('subject'),
    );

        Mail::to($user->email)
        ->send(new \App\Mail\UserMail($details))
        ;

       return redirect()->back()->with('success', 'Email Sent');
    }
    public function comitemailalluser(Request $request)
    {   $users = User::all();
        foreach ($users as $user) {
            $subject = $request->input('subject');
        $details = array(
            'message' => $request->input('message'),
            'name' => $user->username ,
            'subject' => $request->input('subject'),
            );

        Mail::to($user->email)
        ->send(new \App\Mail\UserMail($details))
        ;
        }


       return redirect()->back()->with('success', 'Email Sent');
    }

    public function emailalluser()
    {
        $users = User::all();

        return view('Admin.Users.emailall', compact('users'));
    }
}
