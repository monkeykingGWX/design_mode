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

class MusicPlayerFactory
{
    public static function create ($type)
    {
        if ($type == 'QQ') {
            $player = new QQPlayer();
        } else if ($type == 'Wy') {
            $player = new WyPlayer();
        } else if ($type == 'KG') {
            $player = new KGPlayer();
        } else {
            $player = null;
        }

        return $player;
    }
}

interface IMusicPlayerFactory
{
    static function create ();
}

class QQPlayerFactory implements IMusicPlayerFactory
{
    public static function create ()
    {
        return new QQPlayer();
    }
}

class WyPlayerFactory implements IMusicPlayerFactory
{
    public static function create ()
    {
        return new WyPlayer();
    }
}

class KGPlayerFactory implements IMusicPlayerFactory
{
    public static function create ()
    {
        return new KGPlayer();
    }
}

class MusicPlayerFactoryMap
{
    const Players = [
        'QQ' => 'QQPlayerFactory',
        'Wy' => 'WyPlayerFactory',
        'KG' => 'KGPlayerFactory'
    ];

    public static function getPlayerFactory (string $type)
    {
        if (empty($type)) {
            return null;
        }

        return (self::Players[$type])::create();
    }
}

MusicPlayerFactoryMap::getPlayerFactory('QQ');