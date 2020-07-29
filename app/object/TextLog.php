<?php

interface Log
{
    function write (string $msg);
}

class TextLog implements Log
{
    public function __construct($dirname, $txtname)
    {
        $this->makeDir($dirname);
        $this->mkTxt($txtname);
    }

    private function makeDir (string $dirName) :void
    {
        // do something
    }

    private function mkTxt (string $txtName) :void
    {
        // do something
    }

    public function write (string $msg)
    {

    }
}

class RedisLog implements Log
{
    private $redis = null;
    private $key = '';

    public function __construct(string $key)
    {
        $this->redis = '...'; // 获取redis实例
        $this->key = $key;
        // ...
    }

    public function write (string $msg)
    {

    }
}

class App
{
    private $logHandle = null;

    public function __construct(Log $log)
    {
        $this->logHandle = $log;
    }

    public function run ()
    {
        // do something

        // 记录日志
        $this->logHandle->write('框架运行信息记录');
    }
}