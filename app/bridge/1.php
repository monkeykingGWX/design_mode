<?php

abstract class FShape
{
    protected $color = null;

    public function __construct(IColor $color)
    {
        $this->color = $color;
    }

    public function shape ()
    {
        echo $this->color->color() . $this->setShape() . PHP_EOL;
    }

    protected abstract function setShape ();
}

class CircleShape extends FShape
{
    protected function setShape ()
    {
        return '圆形';
    }
}

class SquareShape extends FShape
{
    protected function setShape ()
    {
        return '正方形';
    }
}

interface IColor
{
    public function color ();
}

class BlueColor implements IColor
{
    public function color ()
    {
        return '蓝色';
    }
}

class RedColor implements IColor
{
    public function color ()
    {
        return '红色';
    }
}

$blueColor = new BlueColor();
$redColor = new RedColor();

$blueCircleShape = new CircleShape($blueColor);
$redCircleShape = new CircleShape($redColor);
$blueSquareShape = new SquareShape($blueColor);
$redSquareShape = new SquareShape($redColor);

$blueCircleShape->shape();
$redCircleShape->shape();
$blueSquareShape->shape();
$redSquareShape->shape();
