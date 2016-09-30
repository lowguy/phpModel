<?php
/**
 * Created by PhpStorm.
 * User: legendFox
 * Date: 2016/9/30 0030
 * Time: 下午 10:11
 */

namespace Lib\Database;


use Lib\DB;

class Mysql implements DB
{

    private $conn;
    function connect($host, $user, $password, $dbname)
    {
        $conn = mysql_connect($host,$user,$password);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $result = mysql_query($sql);
        return $result;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}