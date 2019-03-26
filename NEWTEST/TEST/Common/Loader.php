<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午6:36
 */

namespace Common;


class Loader
{
    static function autoload($class) {
//        require ;
//        var_dump(BASEDIR.'/'.str_replace('\\','/',$class).'.php');
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}