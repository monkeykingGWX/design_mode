<?php

namespace app\chain;

abstract class AHandler
{
    protected $nextHandler = null;

    public function setNext (AHandler $handler)
    {
        $this->nextHandler = $handler;
    }

    public function handler ()
    {
        if (!$this->doHandler() && $this->nextHandler) {
            $this->nextHandler->handler();
        }
    }

    abstract public function doHandler ();
}