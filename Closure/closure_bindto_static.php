<?php
class MyClass {
    private static $privateStaticProperty = "Private static property";
    protected static $protectedStaticProperty = "Protected static property";

    public static function getStaticClosure() {
        // Defining a closure in a static context
        return static function() {
            return self::$privateStaticProperty . ' ' . static::$protectedStaticProperty;
        };
    }
}

// Getting the static closure
$closure = MyClass::getStaticClosure();

// Binding the closure to null with the scope retained as 'static'
$boundClosure = $closure->bindTo(null, 'static');

// Invoking the bound closure
echo $boundClosure(); // Accessing private and protected static properties in a static context
