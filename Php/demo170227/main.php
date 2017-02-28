<?php
/**
 * Created by PhpStorm.
 * User: weijiaPro
 * Date: 2017/2/27
 * Time: PM10:09
 */

/**
 * __toString() 把一个class对象以string形式输出
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
}

$obj = new Magic();
echo $obj;
