<?php

namespace App\Listeners;

use App\Events\ShowNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateVendor
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
     * @param  \App\Events\ShowNotification  $event
     * @return void
     */
    public function handle(ShowNotification $event)
    {
        //
    }
}
