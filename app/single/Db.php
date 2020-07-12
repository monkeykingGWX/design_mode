<?php

namespace app\single;

final class Db
{
    private static $mysqli = null;

    private function __construct($config = [])
    {
        // 数据库连接操作
    }

    public static function getInstance ($config = [])
    {
        if (is_null(self::$mysqli)) {
            self::$mysqli = new self($config);
        }

        return self::$mysqli;
    }
}