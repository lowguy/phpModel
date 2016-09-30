<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 10:58
 */

namespace Lib;


class MaleStrategy implements Strategy
{

    function showAd()
    {
        echo "male";
    }

    function showCategory()
    {
        echo "male";
    }
}