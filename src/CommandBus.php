<?php

namespace OG\Core\Domain;

/**
 * Delivers a Command to the right CommandHandler.
 */
interface CommandBus
{
    /**
     * Executes the given command.
     *
     * @param Command $command
     */
    public function handle(Command $command);
}
