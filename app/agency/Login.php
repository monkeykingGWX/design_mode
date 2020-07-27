<?php

namespace app\agency;

class Login
{
    public function register ($uname, $pass)
    {
        // 注册业务
        echo $uname . '|' . $pass . PHP_EOL;
        echo '注册业务' . PHP_EOL;
    }

    public function login ($uname, $pass)
    {
        // 登录业务
        echo '登录业务' . PHP_EOL;
    }
}