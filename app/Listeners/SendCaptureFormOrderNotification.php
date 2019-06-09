<?php

namespace App\Listeners;

use App\Events\onCaptureFormOrderReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;
use Mail;
use App\Mail\CaptureFormOrderReceived;

class SendCaptureFormOrderNotification
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
     * @param  onCaptureFormOrderReceived  $event
     * @return void
     */
    public function handle(onCaptureFormOrderReceived $event)
    {
        //Mail::to('okna@aliro.ru')->send(new CaptureFormOrderReceived());
        //Mail::to('bashkirov.denis@aliro.ru')->send(new CaptureFormOrderReceived());
    }
}
