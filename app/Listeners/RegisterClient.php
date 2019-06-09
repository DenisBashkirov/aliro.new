<?php

namespace App\Listeners;

use App\Events\onCaptureFormOrderReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterClient
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
        //
    }
}
