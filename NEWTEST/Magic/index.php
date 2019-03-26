<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午7:16
 */

define('BASEDIR',__DIR__);
include BASEDIR.'/Loader.php';
spl_autoload_register('Loader::autoload');

$index = new \App\Controller\Home\Index();

echo $index->name;

echo $index->ps;

echo $index->ps();

echo \App\Controller\Home\Index::mmf();

echo $index;

echo $index();