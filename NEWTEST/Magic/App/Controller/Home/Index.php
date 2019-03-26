<?php
/**
 * Created by PhpStorm.
 * User: wangye
 * Date: 19-3-26
 * Time: 下午7:20
 */
namespace App\Controller\Home;
class Index
{
    public $name = 'dollarkiller';

    protected $array = [];

    function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->array[$name] = $value;
    }

    function __get($name)
    {
        // TODO: Implement __get() method.
        if (array_key_exists($name,$this->array)) {
            return $this->array[$name];
        }
        return 'no exists';
    }

    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo $name.'function not exists';
    }

    static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        echo $name.'function not exists';
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        return __CLASS__;
    }

    function __invoke()
    {
        // TODO: Implement __invoke() method.
        return 'invoke';
    }
}