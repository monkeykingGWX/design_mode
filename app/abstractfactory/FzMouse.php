<?php

namespace app\abstractfactory;

class FzMouse implements Mouse
{
    public static function createMouse()
    {
        echo '创建方正鼠标' . PHP_EOL;
    }
}