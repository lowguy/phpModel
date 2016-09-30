<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 10:11
 */

namespace Lib\Database;


use Lib\DB;

class PDO implements DB
{

    private $conn;
    
    function connect($host, $user, $password, $dbname)
    {
        $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}