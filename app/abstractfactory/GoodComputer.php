<?php

namespace app\abstractfactory;

class GoodComputer
{
    public function __construct()
    {
        echo '中配电脑' . PHP_EOL;
        GoodComputerFactory::createHost();
        GoodComputerFactory::createKeyboard();
        GoodComputerFactory::createMonitor();
        GoodComputerFactory::createMouse();
    }
}