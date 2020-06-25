<?php

namespace app\observer\cate1;

interface Subject
{
    public function register (Observer $o);
    public function remove (Observer $o);
    public function notify ($info = null);
}