<?php

namespace app\object;

class Person
{
    private $name = '';
    private $age = 0;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function eat ()
    {
        echo '吃东西' . PHP_EOL;
    }

    public function drink ()
    {
        echo '喝水' . PHP_EOL;
    }

    public function sleep ()
    {
        echo '睡觉' . PHP_EOL;
    }

    public function wakeup ()
    {
        echo '起床' . PHP_EOL;
    }

    public function drive ()
    {
        echo '开车' . PHP_EOL;
    }

    public function wash ()
    {
        echo '洗漱' . PHP_EOL;
    }

    public function work (callable $bring)
    {
        $this->wakeup();
        $this->wash();
        $this->eat();
        $bring();
        $this->drive();
    }
}

$person = new Person('小黄', 29);
$person->work(function ()
{
    echo '带上手机、车钥匙、文件' . PHP_EOL;
});