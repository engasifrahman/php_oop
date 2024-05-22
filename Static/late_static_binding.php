<?php
    
/**
 * ?Static Method
 * *Definition: Also declared using the static keyword within a class definition.
 * *Behavior: Can be called directly using the class name without creating an object instance. 
 * They cannot access non-static properties of the class directly (as they are not bound to a specific object).
 * *Purpose: Used for utility functions that don't rely on object state and are generally relevant to the class as a whole. 
 * Examples include helper functions, validation functions, or factory methods for creating objects.
 */
class Foo
{
    public static $name = 'foo';

    public static function getName() {
        return static::$name; // Late static binding (runtime)
    }
}

class Bar extends Foo
{
    public static $name = 'bar';
}

$classname = 'Foo';
print $classname::getName() . PHP_EOL; // As of PHP 5.3.0
print $classname::$name . PHP_EOL . PHP_EOL;

echo "-----------------------------------------------------------" . PHP_EOL;

print Bar::$name . PHP_EOL;
print Bar::getName() . PHP_EOL;