<?php
header('content-type:text/html;charset=utf8');
/**
 * Created by PhpStorm.
 * User: DollarKiller
 * Date: 2019/1/7
 * Time: 下午 07:37
 */
define('PATHS',__DIR__);
spl_autoload_register('load');
//require './test/test.php';

test\test::test();

function load($class)
{
    var_dump($class);
    require PATHS.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
}