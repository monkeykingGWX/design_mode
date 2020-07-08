<?php

namespace app\decorator;

class SmallNoodles extends Noodles
{
    private $desc = '小碗拉面';

    public function cost()
    {
        return 6;
    }

    public function getDesc()
    {
        return $this->desc;
    }
}