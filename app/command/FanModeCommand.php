<?php

namespace app\command;

class FanModeCommand implements Command
{
    private $receiver = null;
    private $mode = 0;
    private $preMode = 0;

    public function __construct(FanReceiver $receiver, $mode = 0)
    {
        $this->receiver = $receiver;
        $this->mode = $mode;
    }

    public function execute(): void
    {
        $this->preMode = $this->receiver->mode;
        $this->receiver->mode($this->mode);
    }

    public function undo(): void
    {
        $this->receiver->mode($this->preMode);
    }
}