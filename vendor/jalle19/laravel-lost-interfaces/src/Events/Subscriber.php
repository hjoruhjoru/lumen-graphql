<?php

namespace Jalle19\Laravel\LostInterfaces\Events;

use Illuminate\Events\Dispatcher;

/**
 * Interface for event subscribers
 *
 * @package Jalle19\Laravel\LostInterfaces\Events
 */
interface Subscriber
{

    /**
     * Register the listeners for the subscriber
     *
     * @param Dispatcher $dispatcher the event dispatcher
     */
    public function subscribe(Dispatcher $dispatcher);

}
