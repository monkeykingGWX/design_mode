<?php

namespace app\decorator2;

require '../../vendor/autoload.php';

$noodles = new BigNoodle();
$beefBigNoodles = new Beef($noodles);
$eggBeffBigNoodles = new Egg($beefBigNoodles);

echo $eggBeffBigNoodles->desc();
echo $eggBeffBigNoodles->cost() . '元';