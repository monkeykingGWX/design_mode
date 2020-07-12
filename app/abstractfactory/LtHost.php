<?php

namespace app\abstractfactory;

class LtHost implements Host
{
    public static function createHost()
    {
        echo '创建雷霆主机' . PHP_EOL;
    }
}