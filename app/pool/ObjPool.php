<?php

namespace app\pool;

class ObjPool
{
    private $freePools = [];
    private $usedPools = [];

    public function fill()
    {
        for ($i = 0; $i < 100; $i ++) {
            $obj = new Obj();
            $this->freePools[spl_object_hash($obj)] = $obj;
        }
    }

    public function get () : Obj
    {
        if (!count($this->freePools)) {
            throw new \Exception('pool empty');
        }

        $obj = array_pop($this->freePools);
        $this->usedPools[spl_object_hash($obj)] = $obj;

        return $obj;
    }

    public function put (Obj $obj)
    {
        $hashId = spl_object_hash($obj);

        if (isset($this->usedPools[$hashId])) {
            unset($this->usedPools[$hashId]);
            $this->freePools[$hashId] = $obj;
        }
    }

    public function __get ($name)
    {
        return $this->$name ?? null;
    }
}