<?php
/**
 * 注册器
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 9:58
 */

namespace Lib;


class Register
{
    protected static $objects;
    
    public static function set($alias,$object){
        self::$objects[$alias] = $object;
    }
    
    public static function get($alias){
        return self::$objects[$alias];
    }
    
    public function _unset($alias){
        unset(self::$objects[$alias]);
    }
}