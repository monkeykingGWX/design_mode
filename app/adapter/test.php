<?php

namespace app\adapter;

require '../../vendor/autoload.php';

$easyLog = new EasyLog();
$easyLogAdapter = new EasyLogAdapter($easyLog);
$easyLogAdapter->write('hello');

