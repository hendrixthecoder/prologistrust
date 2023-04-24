<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Plans;
use App\Models\Invests;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use function GuzzleHttp\Promise\each;

use Laravel\Jetstream\InertiaManager;
use Illuminate\Support\Facades\Validator;

class PlansController extends Controller
{
    
    public function user_plans()
    {
        $page_title = 'User Investment Plans';
        $empty_message = 'No Investment Plans Available';
        $u_invests = Invests::all();

        return view('Admin.Plans.userplans', compact('page_title', 'u_invests', 'empty_message'));
    }

     
    public function index()
    {
        $page_title = 'Investment Plans';
        $empty_message = 'No Investment Plans Available';
        $plans = Plans::all();

        return view('Admin.Plans.index', compact('page_title', 'plans', 'empty_message'));
    }

    public function create(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required|max:191',
            'min' => 'required|max:191',
            'max' => 'required|max:191',
            'duration' => 'required|max:191',
            'roi' => 'required|max:191',
        ]);
        if($validator->fails())
        {
            return redirect('admin/plans/')
            ->with('errors', $validator->messages());
        }
        else
        {
         
          $plan = new Plans();
          $plan->name = $request->input('name');
          $plan->min = $request->input('min');
          $plan->max = $request->input('max');
          $plan->duration = $request->input('duration');
          $plan->roi = $request->input('roi');
          $plan->time_left = '122';

          $plan->save();

          return redirect('admin/plans/')
          ->with('success', 'Plan Created');
        }
        
    }

    public function edit(Request $request, $id){
        $page_title = 'Edit Plans';
        $empty_message = 'No Investment Plans Available';

        $plan= DB::table('plans')->where('id', $id)->get();
        return view('Admin.Plans.edit', compact('plan', 'page_title', 'empty_message'))
        ->with('plans', $plan);

    }


    public function update(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'name' => 'required|max:191',
            'min' => 'required|max:191',
            'max' => 'required|max:191',
            'duration' => 'required|max:191',
            'roi' => 'required|max:191',

        ]);

        if($validator->fails())
        {
            return redirect('admin/plans/')
            ->with('errors', $validator->messages());
        }
        else
        {
          
            $uplan = Plans::findorfail($id);
            $uplan->name = $request->input('name');
            $uplan->min = $request->input('min');
            $uplan->max = $request->input('max');
            $uplan->duration = $request->input('duration');
            $uplan->roi = $request->input('roi');
            $uplan->time_left = '122';

            $uplan->update();

          return redirect('admin/plans/')
          ->with('success', 'Plan Updated');
        }
         
    }

    public function delete ($id)
    {
        $dplan = Plans::findOrFail($id);
        $dplan->delete();
        return redirect('/admin/plans')->with('success', 'Plan Deleted');
    }

    public function executeall()
    {
        $reslimit = User::all();
        for($s = 1; $s == count($reslimit); $s++)
        {
            $myuser = User::find($s);
            $myuser->withlimit = '200';
            $myuser->update();
        }

        $transactions = DB::table('invests')->where('status', 'running')->get();

        for($i = 0; $i < count($transactions); $i++){
            $profit = ($transactions[$i]->roi / 100) * $transactions[$i]->amount;
            $userid = $transactions[$i]->user_id;
            $time_left = $transactions[$i]->id;

            
            $user = User::find($userid);
            $temp = $user->profit + $profit;
            $user->profit = $user->profit + $profit;
            
            $user->update();
            

            //create Transaction History
            $history = new Transaction();
            $history->trx_id = Str::random(12);
            $history->username = $userid;
            $history->amount = $profit;
            $history->type = 'Credit';
            $history->balance = $user->profit;
            $history->detail = 'ROI Earned at '. Carbon::now();
            $history->save();

            //reduce time
            $time = Invests::find($time_left);
            $duration = $time->time_left - 1;
            $time->time_left = $duration;
            if ($time->time_left < 0){
                $time->status = 'completed';
                $time->time_left = 0;
            }
            $time->update();
           
            

        }//return $userid;
    } 

    public function viewplandetails($id) 
    {
        $plan = Invests::find($id);
        $user = User::find($plan->user_id);
        $invest =Plans::find($plan->plan_id);
        
        return view('Admin.Plans.view', compact('plan', 'user', 'invest'));
        
    }

    public function approveplandetails($id)
    {
        $plan = Invests::find($id);
        $user = User::find($plan->user_id);
        $plan->status = 'running';
        $plan->update();

        $reff = User::find($user->referrer_id);
        
        if ($reff !=null){
            
            //give ref bonus
        
        $ref_bonus = (5 / 100) * $plan->amount;
        $bonus = $reff->bonus + $ref_bonus;
        
        $reff->bonus = $bonus;
        $reff->update();

        //create History
        $history = new Transaction();
        $history->trx_id = Str::random(12);
        $history->username = $reff->id;
        $history->amount = $ref_bonus;
        $history->type = 'Credit';
        $history->balance = $bonus;
        $history->detail = 'Referrer Bonus Earned for '. $user->firstname . ' ' . $user->lastname;
        $history->save();
        
        // Level 2
        
        $refref = User::find($reff->referrer_id);
        $ref_bonuss = (3 / 100) * $plan->amount;
        $bonuss = $refref->bonus + $ref_bonuss;
        
        $refref->bonus = $bonuss;
        $refref->update();

        //create History
        $history2 = new Transaction();
        $history2->trx_id = Str::random(12);
        $history2->username = $refref->id;
        $history2->amount = $ref_bonuss;
        $history2->type = 'Credit';
        $history2->balance = $bonuss;
        $history2->detail = 'Referrer Bonus Earned for '. $reff->firstname . ' ' . $reff->lastname;
        $history2->save();
        
        // Level 3
        
        $refrefs = User::find($refref->referrer_id);
        $ref_bonusss = (1 / 100) * $plan->amount;
        $bonusss = $refrefs->bonus + $ref_bonusss;
        
        $refrefs->bonus = $bonusss;
        $refrefs->update();

        //create History
        $history3 = new Transaction();
        $history3->trx_id = Str::random(12);
        $history3->username = $refrefs->id;
        $history3->amount = $ref_bonusss;
        $history3->type = 'Credit';
        $history3->balance = $bonusss;
        $history3->detail = 'Referrer Bonus Earned for '. $refref->firstname . ' ' . $refre->lastname;
        $history3->save();
            
        }

        

        return redirect('admin/userplans')
        ->with('success', 'Plan Approved');
    }

    public function rejectplandetails($id)
    {
        $plan = Invests::find($id);

        $plan->status = 'rejected';
        $plan->update();

        return redirect('admin/userplans')
        ->with('success', 'Plan Rejected');
    }
    
    public function resetwithlimit()
    {
        $users = User::all();
        for ($i = 0; $i < count($users); $i++)
        {
            $ruser = User::find($users[$i]->id);
            $ruser->withlimit = 200;
            $ruser->update();
            // echo $ruser->firstname . ' gotten \r\n ';
        }
    }
}
