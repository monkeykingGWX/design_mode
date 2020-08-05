<?php

namespace app\registry;

class Registry
{
    // 保存实例对象
    private static $objs = [];

    // get获取实例对象
    public static function get(string $alias)
    {
        if (!isset(self::$objs[$alias])) {
            return null;
        }

        return self::$objs[$alias];
    }

    // set将实例对象注册到属性$objs中
    public static function set (string $alias, Object $obj) : void
    {
        if (!isset(self::$objs[$alias])) {
            self::$objs[$alias] = $obj;
        }
    }

    // 注销实例
    public static function unset (string $alias) :void
    {
        if (isset(self::$objs[$alias])) {
            unset(self::$objs[$alias]);
        }
    }
}