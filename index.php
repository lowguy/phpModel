<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 9:35
 */
define('DIR',__DIR__);
include_once DIR.'/Lib/App.php';
$app = \Lib\App::getInstance();
$app->run();

$event = new \Lib\Observer\Event();
$event->addObserver(new \Lib\Observer\Observer1());
$event->addObserver(new \Lib\Observer\Observer2());
$event->trigger();