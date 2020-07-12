<?php

namespace app\abstractfactory;

class GreatComputerFactory implements ComputerFactory
{
    public static function createHost()
    {
        QlHost::createHost();
    }

    public static function createKeyboard()
    {
        LbKeyboard::createKeyboard();
    }

    public static function createMonitor()
    {
        AocMonitor::createMonitor();
    }

    public static function createMouse()
    {
        LjMouse::createMouse();
    }
}