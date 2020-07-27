<?php

class Log
{
    protected function __construct()
    {
    }

    public function log ()
    {
        throw new \Exception('请重写该方法');
    }
}