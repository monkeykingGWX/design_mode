<?php

namespace app\decorator;
require '../../vendor/autoload.php';

$noodles = new BigNoodles();
$beefBigNoodles = new Beef($noodles);

echo $beefBigNoodles->getDesc() . '拉面';
echo $beefBigNoodles->cost() . '元';