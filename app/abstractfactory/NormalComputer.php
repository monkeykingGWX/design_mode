<?php

namespace app\abstractfactory;

class NormalComputer
{
    public function __construct()
    {
        echo '低配电脑' . PHP_EOL;
        NormalComputerFactory::createHost();
        NormalComputerFactory::createKeyboard();
        NormalComputerFactory::createMonitor();
        NormalComputerFactory::createMouse();
    }
}