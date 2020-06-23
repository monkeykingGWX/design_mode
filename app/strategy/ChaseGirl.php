<?php

namespace app\strategy;

class ChaseGirl
{
    private $chaseGirlType = null;

    public function __construct(ChaseGirlType $chaseGirlType)
    {
        $this->chaseGirlType = $chaseGirlType;
    }

    public function ChaseGirl ()
    {
        $this->chaseGirlType->type();
    }
}