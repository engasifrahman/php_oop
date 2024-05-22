<?php

/**
 * ?Generic empty class
 * 
 * A generic empty class with dynamic properties.
 * Objects of this class can be instantiated with new operator or created by typecasting to object. 
 * Several PHP functions also create instances of this class, 
 * e.g. json_decode(), mysqli_fetch_object() or PDOStatement::fetchObject().
 * 
 * Despite not implementing __get()/__set() magic methods, this class allows 
 * dynamic properties and does not require the #[\AllowDynamicProperties] attribute.
 * 
 * This is not a base class as PHP does not have a concept of a universal base class. 
 * However, it is possible to create a custom class that extends from stdClass 
 * and as a result inherits the functionality of dynamic properties.
 */
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
