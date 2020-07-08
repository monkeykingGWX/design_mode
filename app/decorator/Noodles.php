<?php

namespace app\decorator;

abstract class Noodles
{
    public $desc = '';

    public function getDesc ()
    {
        return $this->desc;
    }

    public abstract function cost ();
}