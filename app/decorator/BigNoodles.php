<?php

namespace app\decorator;

class BigNoodles extends Noodles
{
    private $desc = '大碗拉面';

    public function cost()
    {
        return 9;
    }
}