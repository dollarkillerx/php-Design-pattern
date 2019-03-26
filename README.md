# php-Design-pattern
php Design pattern
>PSR-0 规范

- 命名空间必须与绝对路径一致
- 类名首字母必须大写
- 除入口文件外,其他".php"必须只有一个类

>new DEMO
- 必须全部使用命名空间
- 所有PHP文件必须自动载入,不能有include/require
- 单一入口

>SPL标准库
- 链式操作
- 魔术方法

>三种基础设计模式
- 工厂模式
- 单例模式
- 注册树模式

>设计模式
- 调试器模式
- 策略模式
- 数据对象映射模式
- 观察者模式
- 原型模式
- 装饰器模式

### 命名空间
``` 
<?php

namespace Test1;

function test() {
    echo __FILE__;
    echo "\n";
}
```
调用
``` 
require 'test1.php';
require 'test2.php';

Test1\test();
Test2\test();
```

### 类自动载入
- 传统自动载入 __autoload() 会冲突 以废弃 
    ```
    Test1::test();
    Test2::test();
    
    function __autoload($class) {
        require __DIR__.'/'.$class.'.php';
    }
    ```
    __autoload 是当文件导入class不存在的时候,会调用autoload方法
- 新方法 spl_autoload_register();  可以有多个不会冲突
    ``` 
    spl_autoload_register('autoload');
    
    Test2::test();
    Test1::test();
    
    function autoload($class) {
        require __DIR__.'/'.$class.'.php';
    }
    ```
### PSR-0规范 
- 命名空间必须与绝对路径一致
- class名首字母必须大写
- 处了入口文件外,其他".php" 必须只有一个class

- 全部使用命名规范
- 所有php文件必须自动载入,不能有include/require
- 单一入口
演示代码 `>NEWTEST>TEST`

### 链式操作实现
演示代码: `>NEWTEST>database`

### PHP魔术方法的使用
- `__get/__set` 将对象属性接管  当设置不存在属性和获取不存在属性会调用__get/__set
- `__call/__callStatic` 控制php对象的方法调用 控制类的静态方法  当调用不存在的方法会调用__call  __callStatic作用与静态方法
- `__toString` 当对象以str输出的时候 会调用toString方法
- `__invoke` 当对象以函数执行 会调用invoke
演示代码: `>NEWTEST>magic`
``` 
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
```

### 三种基本设计魔术
- 工厂模式 工厂方法或者类生成对象,而不是在代码中直接new   演示代码`NEWTEST>BASICdESIGNpATTERNS>APP>Factory`
- 单例模式 使某个类的对象仅允许创建一个   演示代码`NEWTEST>BASICdESIGNpATTERNS>APP>Database`
- 注册树模式 解决全局共享和交换对象  演示代码`NEWTEST>BASICdESIGNpATTERNS>APP>Register`

### 适配器模式
- 适配器模式
可以将各种截然不同的函数接口封装成统一的API
> 实际应用举例: php的数据库操作有mysql,mysqli,pdo 3 种,
可以用适配器模式统一成一致.类似的场景还有cache适配器,
将memcache,redis,file,apc 等不同的缓存函数,统一成一致

演示代码`NEWTEST>BASICdESIGNpATTERNS>APP>Database目录`

### 策略模式
策略模式,将一组特定的方法和行为和算法封装成类,以适应某些特定的上下文环境
> 实际应用举例: 加入一个电商网站系统,针对男性女性用户要各自跳转
到不同的商品类目,并且所有广告展示不同的广告

演示代码`NEWTEST>BASICdESIGNpATTERNS>APP>StrategyMode目录`

- 实现Ioc,依赖倒置,控制反转

### 数据对象映射模式
数据对象映射模式,将对象和数据存储映射起来,对一个对象的操作会映射为对数据存储的操作
> 在代码中实现数据对象映射模式,我们将实现一个ORM类,将复杂的SQL语句映射成对象属性的操作
- 结合使用数据对象映射模式,工厂模式,注册模式








