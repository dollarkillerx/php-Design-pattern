<?php
/**
 * Created by PhpStorm.
 * User: DollarKiller
 * Date: 2019/1/7
 * Time: 下午 05:22
 */
define('BASEDIR',__DIR__);
require BASEDIR.'/DollarKiller/Loader.php';
spl_autoload_register('\\DollarKiller\\Loader::autoload');
DollarKiller\Loader::autoload();
//DollarKiller\Objects::test();
//App\Controller\Home\Index::test();
