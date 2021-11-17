<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\NewUserRegistred;

class SendMailLibrary
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewUserRegistered $event )
    {
        $user = $event->user;
        Mail::send('emails.New Users', ['user' => $user], function ($message) use ($user) {
                $message->from('system@example.com', 'lib');
                $message->subject('New User'.$user->name.'!');
                $message->to('Library@example.com');  
        });
    }
}
