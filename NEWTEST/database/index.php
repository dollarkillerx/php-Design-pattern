<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午7:04
 */
define('BASEDIR',__DIR__);
include BASEDIR.'/Loader.php';
spl_autoload_register('Loader::autoload');

$db = new Database();

$db->where("id=1")->order("name=2")->limit(10);