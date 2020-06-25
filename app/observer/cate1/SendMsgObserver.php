<?php

namespace app\observer\cate1;

class SendMsgObserver implements Observer
{
    public function update($userId)
    {
        echo "向用户{$userId}发送站内信".PHP_EOL;
    }
}