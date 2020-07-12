<?php

namespace app\abstractfactory;

class LsKeyboard implements Keyboard
{
    public static function createKeyboard()
    {
        echo '创建雷蛇键盘'.PHP_EOL;
    }
}