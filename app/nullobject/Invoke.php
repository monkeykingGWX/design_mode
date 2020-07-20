<?php

namespace app\nullobject;

class Invoke
{
    private $command = null;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function call ()
    {
        $this->command->execute();
    }
}