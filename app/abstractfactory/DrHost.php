<?php

namespace app\abstractfactory;

class DrHost implements Host
{
    public static function createHost()
    {
        echo '创建冬日主机' . PHP_EOL;
    }
}