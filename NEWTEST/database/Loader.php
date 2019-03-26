<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午7:05
 */

class Loader
{
    static function autoload ($class) {
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}