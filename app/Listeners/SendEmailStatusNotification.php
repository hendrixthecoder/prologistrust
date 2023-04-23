<?php

namespace App\Listeners;

use Carbon\Carbon;
use App\Mail\StatusNotification;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailStatusNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->$event = $event;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $details = array(
            'name' => Auth::user()->name,
            'login_time' => Carbon::now() ,
    );
    Mail::to(Auth::user()->email)->send(new \App\Mail\StatusNotification($details));

    }
}
