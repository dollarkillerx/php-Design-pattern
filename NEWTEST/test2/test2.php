<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午6:24
 */

spl_autoload_register('autoload');

Test2::test();
Test1::test();

function autoload($class) {
    require __DIR__.'/'.$class.'.php';
}