<?php

namespace app\decorator;
require '../../vendor/autoload.php';

$noodles = new BigNoodles();
$beefBigNoodles = new Beef($noodles);
$eggBeffBigNoodles = new Egg($beefBigNoodles);

echo $eggBeffBigNoodles->getDesc() . '拉面';
echo $eggBeffBigNoodles->cost() . '元';