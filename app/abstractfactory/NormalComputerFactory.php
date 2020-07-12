<?php

namespace app\abstractfactory;

class NormalComputerFactory implements ComputerFactory
{
    public static function createHost()
    {
        DrHost::createHost();
    }

    public static function createKeyboard()
    {
        LsKeyboard::createKeyboard();
    }

    public static function createMonitor()
    {
        BenqMonitor::createMonitor();
    }

    public static function createMouse()
    {
        FzMouse::createMouse();
    }
}