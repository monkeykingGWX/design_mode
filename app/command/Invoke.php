<?php

namespace app\command;

class Invoke
{
    private $command = null;

    public function setCommand (Command $command) :void
    {
        $this->command = $command;
    }

    public function call () :void
    {
        $this->command->execute();
    }
}