<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 10:11
 */

namespace Lib\Database;


use Lib\DB;

class Mysqli implements DB
{

    private $conn;
    
    function connect($host, $user, $password, $dbname)
    {
        $conn = mysqli_connect($host,$user,$password,$dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $result = mysqli_query($this->conn,$sql );
        return $result;
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}