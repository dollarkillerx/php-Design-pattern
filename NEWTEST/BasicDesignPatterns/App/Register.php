<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午8:11
 */

namespace App;


class Register
{
    protected static $objects; // 注册树

    /**
     * @param $alias 别名
     * @param $object 对象
     */
    static function set($alias,$object) {
        self::$objects[$alias] = $object;
    }

    static  function _unset($alias) {
        unset(self::$objects[$alias]);
    }

    static function get($alias) {
        if (array_key_exists($alias,self::$objects)) {
            return self::$objects[$alias];
        }else {
            return false;
        }
    }
}