<?php

namespace App\Listeners;

use App\CaptureForm;
use App\Events\onCaptureFormOrderReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class RegisterCaptureForm
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

    }
}
