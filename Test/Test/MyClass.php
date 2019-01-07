<?php
namespace a\b;
class MyClass
{
    public function __construct()
    {
        echo __NAMESPACE__.'空间中的类被实例化了';
    }
}
namespace b;
class MyClass
{
    public function __construct()
    {
        echo __NAMESPACE__.'空间中的类被实例化了';
    }
}

$cls = new MyClass();
echo '<br>';
$cls2 = new \a\b\MyClass();
echo '<br>';
$cls3 = new \b\MyClass();
echo '<br>';
require './test/test.php';
test();