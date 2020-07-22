<?php

namespace app\pool;

class Obj
{
    private $rand;

    public function __construct()
    {
        $this->rand = mt_rand(10000, 99999);
    }

    public function getTime ()
    {
        return $this->rand;
    }
}