<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午7:53
 */

define('BASEDIR',__DIR__);
include BASEDIR.'/Loader.php';
spl_autoload_register('Loader::autoload');

$db = \App\Factory::createDatabase();


