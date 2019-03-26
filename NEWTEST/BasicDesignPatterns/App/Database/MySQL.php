<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午8:34
 */
namespace App\Database;

use App\IDatabase;

class MySQL implements IDatabase
{
    protected $conn;

    function connect($host, $user, $password, $dbName)
    {
        // TODO: Implement connect() method.
        $conn = mysql_connect($host,$user,$password);
        mysql_select_db($dbName,$conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        $res = mysql_query($sql,$this->conn);
        return $res;
    }

    function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}