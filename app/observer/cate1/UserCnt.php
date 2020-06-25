<?php

namespace app\observer\cate1;

class UserCnt implements Observer
{
    public function update($userId)
    {
        echo '更新用户总数量'.PHP_EOL;
    }
}