<?php
/**
 * 观察者模式
 * 当一个对象状态发生变化时，依赖他的对象全部惠收到通知，并自动更新
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/10/1 0001
 * Time: 上午 12:14
 */

namespace Lib;


abstract class EventGenerator
{
    private $observers = array();
    public function addObserver(Observer $observer){
        $this->observers[] = $observer;
    }

    public function notify(){
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }
}