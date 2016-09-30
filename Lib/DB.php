<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 10:12
 */

namespace Lib;


interface DB
{
    function connect($host,$user,$password,$dbname);
    function query($sql);
    function close();
}