<?php
/**
 * 单例模式
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 9:37
 */

namespace Lib;


class Database
{
    private static $instance;
    
    private function __construct()
    {
        
    }
    
    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function insert(){
        echo 'insert';
    }

    public function update(){
        
    }

    public function delete(){

    }

    public function lists(){

    }
}