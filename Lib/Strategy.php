<?php
/**
 * 策略模式
 * 将一组特定的行为和算法分装成类，以适应某些特定的上下文环境
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 10:49
 */

namespace Lib;


interface Strategy
{
    function showAd();
    function showCategory();
}