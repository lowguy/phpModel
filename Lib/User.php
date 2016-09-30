<?php
/**
 * 数据对象映射模式
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 11:10
 */

namespace Lib;


use Lib\Database\Mysqli;

class User
{
    public $id;
    public $name;
    public $mobile;
    public $age;

    protected $db;

    public function __construct($id)
    {
        $this->db = new Mysqli();
        $this->db->connect('127.0.0.1','root' ,'' ,'test' );
        $res = $this->db->query("SELECT * FROM t_user WHERE id = {$id} limit 1");
        $data = $res->fetch_array();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->age = $data['age'];
    }

    public function __destruct()
    {
        try{
            $this->db->query("UPDATE t_user SET name='{$this->name}',mobile='{$this->mobile}',age='{$this->age}' WHERE id = {$this->id}");
        }catch (\Exception $e){
            echo $e->getMessage();
        }

    }

}