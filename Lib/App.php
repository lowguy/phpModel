<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 10:34
 */

namespace Lib;


class App
{
    private static $instance;

    private function __construct(){

    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    private function autoload(){
        spl_autoload_register(function($class){
            $file = $class.".php";
            require_once $file;
        },true);
    }

    public function run(){
        $this->autoload();
    }
}