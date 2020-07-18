<?php

namespace app\command;

require '../../vendor/autoload.php';

$receiver = new FanReceiver();
$command  = new FanSpeedCommand($receiver, 1);
$command2 = new FanModeCommand($receiver, 1);
$macroCommand = new MacroCommand([$command, $command2]);
$invoke   = new Invoke();
$invoke->setCommand($macroCommand);
$invoke->call();
$invoke->revocation();

