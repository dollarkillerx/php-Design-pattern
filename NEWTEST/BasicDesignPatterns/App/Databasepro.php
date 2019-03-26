<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午8:35
 */

namespace App;

interface IDatabase
{
    function connect($host,$user,$password,$dbName);
    function query($sql);
    function close();
}

class Databasepro
{

}