<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午7:52
 */
namespace App;
class Factory
{
    static function createDatabase() {
        $db = new Fcs();
        return $db;
    }
}