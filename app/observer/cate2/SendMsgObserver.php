<?php

namespace app\observer\cate2;

class SendMsgObserver implements \SplObserver
{
    public function update(\SplSubject $sub)
    {
        echo "向用户{$sub->getter('userId')}发送站内信".PHP_EOL;
    }
}