<?php

namespace app\abstractfactory;

class LsMouse implements Mouse
{
    public static function createMouse()
    {
        echo '创建灵蛇鼠标' . PHP_EOL;
    }
}