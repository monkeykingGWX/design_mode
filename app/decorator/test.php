<?php

namespace app\decorator;
require '../../vendor/autoload.php';

$noodles = new BigNoodles();

$beefNoodles = new Beef($noodles);

echo $beefNoodles->getDesc();