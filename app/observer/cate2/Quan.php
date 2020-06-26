<?php

namespace app\observer\cate2;

class Quan implements \SplObserver
{
    public function update(\SplSubject $sub)
    {
        echo "向用户{$sub->getter('userId')}发送一张新人优惠券".PHP_EOL;
    }
}