<?php

namespace app\decorator2;

class BigNoodle extends Noodles
{
    private $cost = 9.0;

    public function cost()
    {
        return $this->cost;
    }

    public function desc()
    {
        return '大碗拉面';
    }
}