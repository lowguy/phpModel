<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/10/1 0001
 * Time: 上午 12:17
 */

namespace Lib\Observer;

use Lib\EventGenerator;
use Lib\Observer;

class Event extends EventGenerator
{
    public function trigger(){
        echo "Event:890";
        $this->notify();
    }
}

class Observer1 implements Observer{
    public function update($info = null)
    {
       echo "ex 891";
    }
}

class Observer2 implements Observer{
    public function update($info = null)
    {
        echo "ex 892";
    }
}