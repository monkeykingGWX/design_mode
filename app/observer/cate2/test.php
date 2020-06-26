<?php

namespace app\observer\cate2;

require '../../../vendor/autoload.php';

$sub = new UserRegisterSubject();

$userCnt = new UserCnt();
$quan = new Quan();
$sub->attach($userCnt);
$sub->attach($quan);

$sub->userAdd(1001);



// ==========================
$sub->detach($userCnt);
$sub->attach(new SendMsgObserver());

$sub->userAdd(10002);