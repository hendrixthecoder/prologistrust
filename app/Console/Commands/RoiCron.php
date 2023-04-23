<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Invests;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RoiCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roi:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $transactions = DB::table('invests')->where('status', 'running')->get();

        for($i = 0; $i < count($transactions); $i++){
            $profit = ($transactions[$i]->roi / 100) * $transactions[$i]->amount;
            $userid = $transactions[$i]->user_id;
            $time_left = $transactions[$i]->id;

            $time = Invests::find($time_left);
            $duration = $time->time_left - 1;
            $time->time_left = $duration;

            $user = User::find($userid);
            $temp = $user->profit + $profit;
            if ($time->time_left < 0){
               $refbonus =  (5 / 100) *$transactions[$i]->amount;
               $user->bonus = $refbonus;
            }
            
            $user->profit = $temp;
            
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
            
            if ($time->time_left < 0){
                $time->status = 'completed';
                $time->time_left = 0;
            }
            $time->update();

            

        }
    }
}
