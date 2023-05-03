<?php

namespace App\Listeners;

use App\Events\NewClientRegistered;
use App\Mail\NewClientWelcomeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendNewClientEmailNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */


    /**
     * Handle the event.
     */
    public function handle(NewClientRegistered $event): void
    {

        Mail::to($event->client->email)->send(new NewClientWelcomeMail($event->client));
    }
}
