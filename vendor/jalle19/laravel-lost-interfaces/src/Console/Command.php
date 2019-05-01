<?php

namespace Jalle19\Laravel\LostInterfaces\Console;

/**
 * Interface for console commands
 *
 * @package Jalle19\Laravel\LostInterfaces\Console
 */
interface Command
{

    /**
     * Execute the console command
     *
     * @return int|void either an exit code, or void
     */
    public function handle();

}
