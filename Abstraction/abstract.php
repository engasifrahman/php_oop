<?php

/**
 * ?abstract
 * 
 * *An abstract class is a class that contains at least one abstract method.
 * In PHP, an abstract class is a class that 
 * !!cannot be instantiated on its own, 
 * * but can be extended by other classes.
 * 
 */
abstract class Base { 
    function __construct() { 
        echo "This is abstract class constructor "; 
    } 
    public function foo(){
    }
    // This is abstract function 
    abstract function printdata();
}

class Derived extends Base { 
    function __construct() { 
        echo "Derived class constructor \n"; 
    } 
    function printdata() { 
        echo "Derived class printdata function\n"; 
    } 
} 

$b1 = new Derived; 
$b1->printdata();
