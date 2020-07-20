<?php

namespace app\template;

class Powder extends Breakfast
{
    public function brew ()
    {
        echo '加入酸辣粉' . PHP_EOL;
    }

    public function addSeasoning ()
    {
        echo '加入酸辣粉的调料包' . PHP_EOL;
    }
}