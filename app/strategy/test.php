<?php

namespace app\strategy;

require '../../vendor/autoload.php';

// 小明追女孩采用直接式
echo '小明追女孩'.PHP_EOL;
$chaseGirl = new ChaseGirl(new ChaseGirlDirect());
$chaseGirl->ChaseGirl();

echo PHP_EOL. '============='.PHP_EOL;

// 小周追女孩
echo '小周追女孩'.PHP_EOL;
$chaseGirl = new ChaseGirl(new ChaseGirlGradual());
$chaseGirl->ChaseGirl();

echo PHP_EOL. '============='.PHP_EOL;

echo '小谢追女孩'.PHP_EOL;
$chaseGirl = new ChaseGirl(new ChaseGirlTease());
$chaseGirl->ChaseGirl();

