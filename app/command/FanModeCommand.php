<?php

namespace app\command;

class FanModeCommand implements Command
{
    private $receiver = null;
    private $mode = 0;

    public function __construct(FanReceiver $receiver, $mode = 0)
    {
        $this->receiver = $receiver;
        $this->mode = $mode;
    }

    public function execute(): void
    {
        $this->receiver->mode($this->mode);
    }
}