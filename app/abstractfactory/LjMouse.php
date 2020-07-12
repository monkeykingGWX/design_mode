<?php

namespace app\abstractfactory;

class LjMouse implements Mouse
{
    public static function createMouse()
    {
        echo '创建罗技鼠标' . PHP_EOL;
    }
}