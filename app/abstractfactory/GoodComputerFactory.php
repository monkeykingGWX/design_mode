<?php

namespace app\abstractfactory;

class GoodComputerFactory implements ComputerFactory
{
    public static function createHost()
    {
        LtHost::createHost();
    }

    public static function createKeyboard()
    {
        LjKeyboard::createKeyboard();
    }

    public static function createMonitor()
    {
        HkcMonitor::createMonitor();
    }

    public static function createMouse()
    {
        LsMouse::createMouse();
    }
}