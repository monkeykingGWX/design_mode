<?php

namespace app\observer\cate1;

class UserRegisterSubject implements Subject
{
    private $observers = [];

    public function register(Observer $o)
    {
        if (!in_array($o, $this->observers)) {
            $this->observers[] = $o;
        }
    }

    public function remove(Observer $o)
    {
        if (($k = array_search($o, $this->observers)) >= 0) {
            unset($this->observers[$k]);
        }
    }

    public function notify($info = null)
    {
        foreach ($this->observers as $o) {
            $o->update($info);
        }
    }

    // 当有新用户注册时，触发notify方法
    public function userAdd ($userId)
    {
        $this->notify($userId);
    }
}