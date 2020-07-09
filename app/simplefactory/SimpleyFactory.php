<?php

namespace app\simplefactory;

class SimpleFactory
{
    public function createMusicPlayer ($type)
    {
        if ($type == 1) {
            $player = new QQPlayer();
        } else if ($type == 2) {
            $player = new WyPlayer();
        } else if ($type == 3) {
            $player = new KGPlayer();
        } else {
            return null;
        }

        return $player;
    }
}