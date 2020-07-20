<?php

namespace app\iterator;

class UserList implements \Iterator, \Countable
{
    private $users = null;
    private $currentIndex = 0;

    public function addUsers (User $user)
    {
        $this->users[] = $user;
    }

    public function current()
    {
        return $this->users[$this->currentIndex];
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function key()
    {
        return $this->currentIndex;
    }

    public function valid ()
    {
        return isset($this->users[$this->currentIndex]);
    }

    public function rewind ()
    {
        $this->currentIndex = 0;
    }

    public function count ()
    {
        return count($this->users);
    }
}