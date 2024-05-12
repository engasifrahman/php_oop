<?php
    class Foo
    {
        public static $name = 'foo';

        public static function getName() {
            return self::$name; // Late binding (runtime)
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