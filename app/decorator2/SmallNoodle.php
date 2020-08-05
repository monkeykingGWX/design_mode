<?php

namespace app\decorator2;

class SmallNoodle extends Noodles
{
    private $cost = 6.0;

    public function cost()
    {
        return $this->cost;
    }

    public function desc()
    {
        return  '小碗拉面';
    }
}