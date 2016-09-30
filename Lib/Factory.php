<?php
/**
 * 工厂类
 * 工厂方法或者类生成对象，而不是在代码中直接new
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 9:32
 */

namespace Lib;


class Factory
{
    public static function createDatabase(){
        $db = Database::getInstance();
        Register::set('db', $db);
        return $db;
    }
}