<?php

namespace app\command;

class FanReceiver
{
    const SPEED_OFF = 0;
    const SPEED_LOW = 1;
    const SPEED_MID = 2;
    const SPEED_HIGH = 3;

    const MODE_NORMAL = 0;
    const MODE_SWING = 1;

    private $speed = 0;
    private $mode  = 0;

    public function speed (int $speed = self::SPEED_OFF):void
    {
        $this->speed = $speed;

        switch ($speed) {
            case 0:
                echo '关闭风扇' . PHP_EOL;
                break;
            case 1:
                echo '切换低速风' . PHP_EOL;
                break;
            case 2:
                echo '切换中速风' . PHP_EOL;
                break;
            case 3:
                echo '切换高速风' . PHP_EOL;
                break;
            default:
                exit('请输入正确指令!');
        }
    }

    public function mode (int $mode = self::MODE_NORMAL) :void
    {
        $this->mode = $mode;

        switch ($mode) {
            case 0:
                echo '切换正常模式' . PHP_EOL;
                break;
            case 1:
                echo '切换睡眠模式' . PHP_EOL;
                break;
            default:
                exit('请输入正确指令!');
        }
    }

    public function __get ($arg) {
        return $this->$arg ?? null;
    }
}