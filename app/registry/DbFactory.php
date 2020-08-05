<?php

namespace app\registry;

class DbFactory
{
    const ALIAS = 'Db';
    public static function create ()
    {
        $db = Registry::get(self::ALIAS);

        if (!$db) {
            $db = new Db([
                'host' => 'localhost',
                'user' => 'root',
                'pass' => '',
                'db_name' => 'test'
            ]);

            Registry::set(self::ALIAS, $db);
        }

        return $db;
    }
}