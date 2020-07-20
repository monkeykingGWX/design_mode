<?php

namespace app\iterator;

class User
{
    private $name = '';
    private $age = 0;
    private $job = '';

    public function __construct(string $name, int $age, string $job)
    {
        $this->name = $name;
        $this->age  = $age;
        $this->job  = $job;
    }

    public function getDesc ()
    {
        return $this->name . '|' . $this->age . '|' . $this->job . PHP_EOL;
    }
}