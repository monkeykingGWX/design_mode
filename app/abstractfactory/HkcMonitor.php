<?php

namespace app\abstractfactory;


class HkcMonitor implements Monitor
{
    public static function createMonitor()
    {
        echo '创建hkc显示屏' . PHP_EOL;
    }
}