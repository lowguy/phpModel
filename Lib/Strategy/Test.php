<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 11:30
 */
namespace Lib\Strategy;
class Test
{
    private $strategy;

    public function index(){
        echo "AD:";
        $this->strategy->showAd();
    }

    public function setStrategy(\Lib\Strategy $strategy){
        $this->strategy = $strategy;
    }
}