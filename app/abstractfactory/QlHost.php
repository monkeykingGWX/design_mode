<?php

namespace app\abstractfactory;

class QlHost implements Host
{
    public static function createHost()
    {
        echo '创建麒麟主机' . PHP_EOL;
    }
}