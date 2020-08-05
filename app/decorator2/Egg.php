<?php

namespace app\decorator2;

class Egg extends NoodlesDecorator
{
    private $desc = '鸡蛋';
    private $cost = 1.0;

    protected $noodles = null;

    public function __construct(Noodles $noodels)
    {
        $this->noodles = $noodels;
    }

    public function cost ()
    {
        return $this->cost + $this->noodles->cost();
    }

    public function desc ()
    {
        return $this->desc . $this->noodles->desc();
    }
}