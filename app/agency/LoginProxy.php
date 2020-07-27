<?php

namespace app\agency;

class LoginProxy
{
    private $target = [];

    public function __construct(Object $obj)
    {
        $this->target[] = $obj;
    }

    public function __call($name, $arguments)
    {
        foreach ($this->target as $obj) {
            $ref = new \ReflectionClass($obj);

            if ($method = $ref->getMethod($name)) {
                if ($method->isPublic() && !$method->isAbstract()) {
                    // 限流
                    echo "这里是限流业务处理" . PHP_EOL;

                    $result = $method->isStatic() ? $method->invoke(null, $obj, ...$arguments) : $method->invoke($obj, ...$arguments);
                    return $result;
                }
            }
        }
    }
}

