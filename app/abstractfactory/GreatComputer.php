<?php

namespace app\abstractfactory;

class GreatComputer
{
    public function __construct()
    {
        echo '高配电脑' . PHP_EOL;
        GreatComputerFactory::createHost();
        GreatComputerFactory::createKeyboard();
        GreatComputerFactory::createMonitor();
        GreatComputerFactory::createMouse();
    }
}