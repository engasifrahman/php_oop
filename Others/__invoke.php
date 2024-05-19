<?php

class MyClass
{
    public function __invoke(...$arguments)
    {   
        var_dump($arguments);
        echo 'Called to the __invoke method';
    }
}

$instance = new MyClass;
$instance(1, 4);