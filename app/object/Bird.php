<?php

abstract class AbstractBird
{
    abstract function desc ();
}

interface Flyable
{
    function fly ();
}

class flyAbility implements Flyable
{
    public function fly ()
    {
        echo 'I can fly!';
    }
}

class sparrow extends AbstractBird implements Flyable
{
    public function fly ()
    {
        // 委托
        (new flyAbility())->fly();
    }
    public function desc()
    {
        echo '我是麻雀';
    }
}