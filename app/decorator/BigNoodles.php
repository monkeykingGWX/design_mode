<?php

namespace app\decorator;

class BigNoodles extends Noodles
{
    private $desc = '大碗';

    public function cost()
    {
        return 9;
    }

    public function getDesc()
    {
        return $this->desc;
    }
}