<?php

namespace app\chain;


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
        $hdCnt = count($this->handlerChains);

        for ($i = 0; $i < $hdCnt; $i ++) {
            if (isset($this->handlerChains[$i]) && isset($this->handlerChains[$i+1])) {
                $this->handlerChains[$i]->setNext($this->handlerChains[$i+1]);
            }
        }

        $this->handlerChains[0]->handler();
    }
}