<?php

namespace app\command;

class FanSpeed implements Command
{
    private $receiver = null;
    private $speed = 0;
    private $prevSpeed = 0;

    public function __construct(FanReceiver $receiver, $speed = 0)
    {
        $this->receiver = $receiver;
        $this->speed = $speed;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->receiver->speed;
        $this->receiver->speed($this->speed);
    }

    public function undo(): void
    {
        $this->receiver->speed($this->prevSpeed);
    }
}