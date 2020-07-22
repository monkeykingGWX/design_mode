<?php

namespace app\state;

interface State
{
    public function pass ();

    public function fail ();
}

class Content implements State
{
    protected $context;

    public function setContent (State $content)
    {
        $this->context = $content;
    }

    public function pass ()
    {
        $this->context->pass();
    }

    public function fail ()
    {
        $this->context->fail();
    }
}

class Authed implements State
{
    public function pass()
    {
        echo '审核通过' . PHP_EOL;
    }

    public function fail ()
    {
        echo '审核不通过' . PHP_EOL;
    }
}

class Passed implements State
{
    public function pass()
    {
        // nothing
    }

    public function fail ()
    {
        echo '该商户含虚假信息，请先整改' . PHP_EOL;
    }
}

class Failed implements State
{
    public function pass()
    {
        echo '请先修改信息，然后等待审核' . PHP_EOL;
    }

    public function fail ()
    {
        echo '请先修改信息，然后等待审核' . PHP_EOL;
    }
}

$content = new Content();
$content->setContent(new Authed());
$content->pass();
$content->fail();