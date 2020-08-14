<?php

namespace app\chain;

class Handler2 extends AHandler
{
    public function doHandler()
    {
        $handled = false;

        // 处理请求
        echo 'Handler2接受到了请求' . PHP_EOL;

        return $handled;
    }
}