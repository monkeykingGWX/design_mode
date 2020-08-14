<?php

namespace app\chain;

class Handler1 extends AHandler
{
    public function doHandler()
    {
        $handled = false;

        // 处理请求
        echo 'Handler1接受到了请求' . PHP_EOL;

        return $handled;
    }
}