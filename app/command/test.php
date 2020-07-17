<?php

namespace app\command;

require '../../vendor/autoload.php';

echo '天热，想吹风扇' . PHP_EOL;
$receiver = new FanReceiver();
$command  = new FanSpeedCommand($receiver, 1);
$invoke   = new Invoke();
$invoke->setCommand($command);
$invoke->call();

echo '还不够爽，调最大的风' . PHP_EOL;
$command = new FanSpeedCommand($receiver, 3);
$invoke->setCommand($command);
$invoke->call();

echo '要睡觉了，调睡眠状态' . PHP_EOL;
$command = new FanModeCommand($receiver, 1);
$invoke->setCommand($command);
$invoke->call();

echo '出门了，关掉风扇' . PHP_EOL;
$command = new FanSpeedCommand($receiver, 0);
$invoke->setCommand($command);
$invoke->call();