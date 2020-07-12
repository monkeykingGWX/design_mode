<?php

interface IMath
{
    function count($num1, $num2);
}

class Add implements IMath
{
    public function count($num1, $num2)
    {
        return $num1 + $num2;
    }
}

class Sub implements IMath
{
    public function count($num1, $num2)
    {
        return $num1 - $num2;
    }
}

interface IFactory
{
    static function getObj ();
}

class FacAdd implements IFactory
{
    public static function getObj()
    {
        return new Add();
    }
}

class FacSub implements IFactory
{
    public static function getObj()
    {
        return new Sub();
    }
}

$math = FacSub::getObj();
echo $math->count(10, 20);