<?php

namespace app\command;

class MacroCommand implements Command
{
    private $commands = [];

    public function __construct($commands = [])
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo(): void
    {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }
}