<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/10/1 0001
 * Time: 下午 1:20
 */

namespace Lib;


class Canvas
{
    private $data = array();

    /**
     * @param int $width
     * @param int $height
     * @param string $str
     */
    public function init($width = 10,$height = 5, $str = "*"){
        $data = array();
        for ($m=0;$m<$height;$m++){
            for($n=0;$n<$width;$n++){
                $data[$m][$n] = $str;
            }
            $this->data = $data;
        }
    }

    public function rect($x,$width,$y,$height)
    {
        $data = $this->data;
        foreach ($data as $key => $value){
            foreach ($value as $k => $v){
                if(($key>=$y&&$key<=($y+$height))&&($k>=$x&&$k<=($x+$width))){
                    $data[$key][$k] = "@";
                }
            }
        }
        $this->data = $data;
    }

    public function draw(){
        $data = $this->data;
        foreach ($data as $value){
            foreach ($value as $v){
                echo $v;
            }
            echo "<br/>";
        }
    }
}