<?php

namespace app\template;

abstract class Breakfast
{
    final public function prepare () {
        $this->boilWater();
        $this->brew();
        $this->addSeasoning();
        $this->hook();
        $this->wait();
    }

    public function boilWater ()
    {
        echo '烧开水' . PHP_EOL;
    }

    // 泡食材
    abstract public function brew ();

    // 加调料
    abstract public function addSeasoning ();

    public function wait ()
    {
        echo '等待2~3分钟' . PHP_EOL;
    }

    public function hook () :void
    {}
}