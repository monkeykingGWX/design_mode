<?php

namespace app\abstractfactory;

class LbKeyboard implements Keyboard
{
    public static function createKeyboard()
    {
        echo '创建雷柏键盘'.PHP_EOL;
    }
}