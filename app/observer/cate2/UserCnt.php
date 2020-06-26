<?php

namespace app\observer\cate2;

class UserCnt implements \SplObserver
{
    public function update(\SplSubject $sub)
    {
        echo '更新用户总数量'.PHP_EOL;
    }
}