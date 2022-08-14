<?php
    //Example #1 Static property example
    class Foo
    {
        public static $my_static = 'foo';
        const a = 'foo';

        public function staticValue() {
            return self::$my_static;
        }
    }

    class Bar extends Foo
    {
        public function fooStatic() {
            return parent::$my_static;
        }
    }


    print Foo::$my_static . "\n";

    $foo = new Foo();
    print $foo->staticValue() . "\n";
    print $foo->my_static . "\n";      // Undefined "Property" my_static 
    print $foo->a;

    print $foo::$my_static . "\n";
    $classname = 'Foo';
    print $classname::$my_static . "\n"; // As of PHP 5.3.0

    print Bar::$my_static . "\n";
    $bar = new Bar();
    print $bar->fooStatic() . "\n";

    //Example #2 Static property example
    class a{

        static protected $test="<br> class a";
        
        public function static_test(){
        
            echo static::$test; // Results class b
            echo self::$test; // Results class a
        
        }
        
    }
        
    class b extends a{
    
        static protected $test="<br> class b";
    
    }
    
    $obj = new b();
    $obj->static_test();
?>