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
        var_dump($class);
       require BASEDIR.DIRECTORY_SEPARATOR.str_repeat('\\',DIRECTORY_SEPARATOR,$class).'.php';
    }
}