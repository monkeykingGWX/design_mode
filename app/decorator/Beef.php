<?php

namespace app\decorator;


class Beef extends NoodlesDecorator
{
    private $desc = '牛肉';
    private $noodles = null;

    public function __construct(Noodles $noodles)
    {
        $this->noodles = $noodles;
    }

    public function getDesc()
    {
        return $this->noodles->getDesc() . $this->desc;
    }

    public function cost()
    {
        return $this->noodles->cost() + 6;
    }
}