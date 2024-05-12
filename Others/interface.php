<?php
    /**
     * *A PHP interface defines a contract which a class must fulfill.
     * *If a PHP class is a blueprint for objects, an interface is a blueprint for classes.
     */
    interface ia
    {
        public function foo();
    }

    interface ib extends ia
    {
        public function baz(Baz $baz);
    }

    // This will work    
    /**
     * c
     */
    class ca implements ia
    {
        public $test = 'hey';

        public function foo()
        {
            echo $this->test;
        }

        public function baz(Baz $baz)
        {
            echo $baz;
        }
    }

    // This will not work and result in a fatal error
    // class cd implements ib
    // {
    //     public function foo()
    //     {
    //     }

    //     public function baz(Foo $foo)
    //     {
    //     }
    // }

    $obj = new ca;
    echo "\n\nAccess a method from class\n";
    $obj->foo(); 

    /* -------------------------------------------------------------------------- */

    interface ix
    {
        const y = "Interface constant\n";
    }

    // Scope resolution oparator (the double colon), is a token that allows access to constant, static properties and static methods of a class.
    // Prints: Interface constant
    echo "Access constant from interface\n";
    echo ix::y;


    // This will however not work because it's not allowed to s
    // override constants.
    // class cz implements ix
    // {
    //     const y = 'Class constant';
    // }
