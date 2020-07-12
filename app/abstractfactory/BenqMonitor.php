<?php

namespace app\abstractfactory;


class BenqMonitor implements Monitor
{
    public static function createMonitor()
    {
        echo '创建Benq显示屏' . PHP_EOL;
    }
}