<?php
/**
 * Created by PhpStorm.
 * User: weijiaPro
 * Date: 2017/2/27
 * Time: PM10:09
 */

/**
 * __toString() 把一个class对象以string形式输出
 * __invoke()
 * __call($name, $arguments)
 */
class Magic{
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "This is the toString()";
    }

    public function __invoke($x)
    {
        // TODO: Implement __invoke() method.
        echo "__invoke function called with the parameter " . $x . ".\n";
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo "Calling " . $name . " function with para: " . implode(",", $arguments) . ".\n";
    }
}

$obj = new Magic();
//echo $obj;

$obj->anyName("para1", "para2");//__call()会在任何情况下被调用，哪怕类中没有anyName()方法;


