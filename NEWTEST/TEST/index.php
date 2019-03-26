<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午6:30
 */
define('BASEDIR',__DIR__);
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

//\Common\Object::test(); #注意 object不能作为class name
\App\Controller\Home\Index::test();
