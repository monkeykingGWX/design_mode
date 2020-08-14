<?php

namespace app\chain\method2;

require '../../../vendor/autoload.php';

$handler1 = new Handler1();
$handler2 = new Handler2();
$handler3 = new Handler3();
//$handler1->setNext($handler2);
//$handler2->setNext($handler3);
//
//$handler1->handler();

$handerChian = new HandlerChain([$handler1, $handler2]);
$handerChian->addHandler($handler3);
$handerChian->handler();