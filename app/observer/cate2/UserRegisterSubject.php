<?php

namespace app\observer\cate2;

class UserRegisterSubject implements \SplSubject
{
    private $observers = [];
    private $userId = 0;

    public function attach (\SplObserver $o)
    {
        if (!in_array($o, $this->observers)) {
            $this->observers[] = $o;
        }
    }

    public function detach(\SplObserver $o)
    {
        if (($k = array_search($o, $this->observers)) >= 0) {
            unset($this->observers[$k]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $o) {
            $o->update($this);
        }
    }

    // 当有新用户注册时，触发notify方法
    public function userAdd ($userId)
    {
        $this->userId = $userId;
        $this->notify();
    }

    public function getter ($key)
    {
        if (isset($this->$key)) {
            return $this->$key;
        }
    }
}