<?php

namespace app\abstractfactory;

interface ComputerFactory
{
    static function createHost ();
    static function createKeyboard ();
    static function createMonitor ();
    static function createMouse ();
}