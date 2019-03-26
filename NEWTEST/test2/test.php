<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午6:20
 */
Test1::test();
Test2::test();

function __autoload($class) {
    require __DIR__.'/'.$class.'.php';
}