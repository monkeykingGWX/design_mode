<?php

namespace app\adapter;

class EasyLogAdapter implements LogInterface
{
    private $easyLog = null;

    public function __construct($easyLog)
    {
        $this->easyLog = $easyLog;
    }

    public function write($msg)
    {
        $this->easyLog->log($msg);
    }
}