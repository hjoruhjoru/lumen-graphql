<?php

namespace Jalle19\Laravel\LostInterfaces\Mail;

/**
 * Interface for buildable mailables
 *
 * @package Jalle19\Laravel\LostInterfaces\Mail
 */
interface Buildable
{

    /**
     * Build the message
     *
     * @return $this
     */
    public function build();

}
