<?php

namespace app\template;

class Noodle extends Breakfast
{
    public function brew ()
    {
        echo '加入方便面' . PHP_EOL;
    }

    public function addSeasoning ()
    {
        echo '加入方便面的调料包' . PHP_EOL;
    }

    public function hook(): void
    {
        echo '加入火腿和鸡蛋' . PHP_EOL;
    }
}