<?php

/**
 * ?__invoke()
 * 
 * __invoke() is invoked when an object is called as a function
 */
class MyClass
{
    public function __invoke(...$arguments)
    {   
        var_dump($arguments);
        echo 'Called to the __invoke method';
    }
}

$instance = new MyClass();
echo (is_callable($instance) ? "Yes" : "No") . ", this object is callable\n"; // yes
$instance(1, 4);