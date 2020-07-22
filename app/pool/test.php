<?php

namespace app\pool;

require '../../vendor/autoload.php';

$pool = new ObjPool();
$pool->fill();

$obj1 = $pool->get();
$obj2 = $pool->get();

echo $obj1->getTime() . PHP_EOL;
echo $obj2->getTime() . PHP_EOL;


