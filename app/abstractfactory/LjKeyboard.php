<?php

namespace app\abstractfactory;

class LjKeyboard implements Keyboard
{
    public static function createKeyboard()
    {
        echo '创建罗技键盘'.PHP_EOL;
    }
}