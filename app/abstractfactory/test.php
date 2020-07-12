<?php

namespace app\abstractfactory;

require '../../vendor/autoload.php';

new GreatComputer();
echo '====================' . PHP_EOL;
new GoodComputer();
echo '====================' . PHP_EOL;
new NormalComputer();