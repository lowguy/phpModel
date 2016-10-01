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

$prototype = new \Lib\Canvas();
$prototype->init();

$canvas = clone $prototype;
$canvas->rect(2,1,2 ,1 );
$canvas->draw();
echo "<hr>";

$canvas2 = clone $prototype;
$canvas2->rect(2,2,1 ,2 );
$canvas2->draw();