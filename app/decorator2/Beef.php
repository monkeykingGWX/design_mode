<?php

namespace app\decorator2;

class Beef extends NoodlesDecorator
{
    private $desc = '牛肉';
    private $cost = 6.0;

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