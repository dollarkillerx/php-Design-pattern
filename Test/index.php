<?php
header('content-type:text/html;charset=utf8');

spl_autoload_register('autoload');

Test1::test();
Test2::test();

function autoload($class)
{
    require __DIR__.DIRECTORY_SEPARATOR.$class.'.php';
}