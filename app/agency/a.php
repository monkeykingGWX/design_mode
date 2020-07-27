<?php
class Person{

    public $name, $age, $sex;

    static function show($name, $age, $sex='男'){
        echo "姓名:$name,年龄:$age,性别:$sex";
    }

    function say($content){
        echo "我想说的是:$content";
    }

    function eat($food = 'apple'){

    }
}


$per = new Person();

//参数可以是类名,或者类的实例
$ref = new ReflectionClass('Person');

//获取类里面的所有方法
$class_methods = $ref->getMethods();

//是一个数组,每个对象包含了方法名和所属类
echo '<br/>';
echo "<pre>";print_r($class_methods);echo "<pre>";

//是否拥有某个方法
$has_method = $ref->hasMethod('say');

//获取某个方法的信息,第一个参数可以是类名或类的实例
$some_method = new ReflectionMethod('Person','say');

//判断是否私有,还有static,public
$some_method->isPrivate();

//方法的调用,
if ($some_method->isPublic()&&!$some_method->isAbstract()) {

    if ($some_method->isStatic()){
        //静态方法第一个参数是null,后面参数写方法的参数,可以传递一个或者多个,并且这个方法可以接受数量可变的参数。
        $some_method->invoke(null,'zhangsan','23');
    } else {
        //非静态方法第一个参数传递一个对象
        $some_method->invoke($per,'生活真好');
    }
}
