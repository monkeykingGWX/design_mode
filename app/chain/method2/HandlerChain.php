<?php

namespace app\chain\method2;


class HandlerChain
{
    private $handlerChains = [];

    public function __construct(array $handlerChains)
    {
        $this->handlerChains = $handlerChains;
    }

    public function addHandler (AHandler $handler)
    {
        $this->handlerChains[] = $handler;
    }

    public function handler ()
    {
        foreach ($this->handlerChains as $handler) {
            if ($handler->handler()) {
                break;
            }
        }
    }
}