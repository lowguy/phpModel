<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 10:54
 */

namespace Lib;


class FemaleStrategy implements Strategy
{

    function showAd()
    {
        echo 'female';
    }

    function showCategory()
    {
        echo "female";
    }
}