<?php

namespace app\command;

interface Command
{
    function execute ():void;
    function undo ():void;
}