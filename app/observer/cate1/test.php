<?php

namespace app\observer\cate1;

require '../../../vendor/autoload.php';

$sub = new UserRegisterSubject();

$userCnt = new UserCnt();
$quan = new Quan();
$sub->register($userCnt);
$sub->register($quan);

$sub->userAdd(1001);



// ==========================
$sub->remove($userCnt);
$sub->register(new SendMsgObserver());

$sub->userAdd(10002);