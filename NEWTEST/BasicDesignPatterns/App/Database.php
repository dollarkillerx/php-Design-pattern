<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午8:04
 */

namespace App;


class Database
{
    private $db;

    private function __construct()
    {
//        new \PDO();
    }

    static function getInstance() {
        if (self::$db) {
            return self::$db;
        }else {
            self::$db = new self();
        }
    }
}