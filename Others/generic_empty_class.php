<?php
interface MyInterface
{
    function test();
}

class MyClass implements MyInterface
{
    function test(){
        return true;
    }
}

$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof MyInterface);

$a = new stdClass();

var_dump($a instanceof stdClass);
?>