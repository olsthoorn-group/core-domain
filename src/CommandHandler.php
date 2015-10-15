<?php

namespace OG\Core\Domain;

/**
 * Executes a Command.
 */
interface CommandHandler
{
    /**
     * Executes the given command.
     *
     * @param Command $command
     */
    public function handle(Command $command);
}
