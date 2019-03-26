<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午8:35
 */
namespace App\Database;

use App\IDatabase;

class MySQLi implements IDatabase
{
    protected $conn;

    function connect($host, $user, $password, $dbName)
    {
        // TODO: Implement connect() method.
        $conn = mysqli_connect($host,$user,$password,$dbName);
        $this->conn = $conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        return mysqli_query($this->conn,$sql);
    }

    function close()
    {
        // TODO: Implement close() method.
        mysqli_close($this->conn);
    }
}