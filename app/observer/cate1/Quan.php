<?php

namespace app\observer\cate1;

class Quan implements Observer
{
    public function update($userId)
    {
        echo "向用户{$userId}发送一张新人优惠券".PHP_EOL;
    }
}