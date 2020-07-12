<?php

namespace app\abstractfactory;


class AocMonitor implements Monitor
{
    public static function createMonitor()
    {
        echo '创建Aoc显示屏' . PHP_EOL;
    }
}