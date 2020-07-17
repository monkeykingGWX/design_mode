<?php

namespace app\command;

require '../../vendor/autoload.php';

$receiver = new FanReceiver();
$command  = new FanSpeed($receiver, 1);
$invoke   = new Invoke();
$invoke->setCommand($command);
$invoke->call();

$command2  = new FanSpeed($receiver, 2);
$invoke2   = $invoke->setCommand($command2);
$invoke->call();
$invoke->undo();