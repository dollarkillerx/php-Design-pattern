<?php
/**
 * Created by PhpStorm.
 * User: DollarKiller
 * Date: 2019/1/7
 * Time: 下午 05:32
 */
namespace DollarKiller;
class Loader
{
    static function autoload($class)
    {
       require BASEDIR.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
    }

    static function test()
    {
        echo 'this is test';
    }
}