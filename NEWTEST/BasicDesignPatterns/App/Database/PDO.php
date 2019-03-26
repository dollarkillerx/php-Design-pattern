<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午8:35
 */
namespace App\Database;

use App\IDatabase;

class PDO implements IDatabase
{
    protected $conn;

    function connect($host, $user, $password, $dbName)
    {
        // TODO: Implement connect() method.
        $conn = new \PDO("mysql:host={$host};dbname={$dbName}",$user,$password);
        $this->conn = $conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        return $this->conn->query($sql);
    }

    function close()
    {
        // TODO: Implement close() method.
        unset($this->conn);
    }
}