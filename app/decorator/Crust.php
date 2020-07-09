<?php

namespace app\decorator;


class Crust extends NoodlesDecorator
{
    private $desc = '锅巴';
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
        return $this->noodles->cost() + 1;
    }
}