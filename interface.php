<?php
    interface a
    {
        public function foo();
    }

    interface b extends a
    {
        public function baz(Baz $baz);
    }

    // This will work
    class c implements a
    {
        public function foo()
        {
            echo 'asif';
        }

        public function baz(Baz $baz)
        {
            echo $baz;
        }
    }

    // This will not work and result in a fatal error
    
    // class d implements b
    // {
    //     public function foo()
    //     {
    //     }

    //     public function baz(Foo $foo)
    //     {
    //     }
    // }

    interface x
    {
        const y = 'Interface constant';
    }

    // Prints: Interface constant
    echo x::y;


    // This will however not work because it's not allowed to 
    // override constants.

    // class z implements x
    // {
    //     const y = 'Class constant';
    // }

    $obj = new c;
    $obj->foo(); 

    // Scope resolution oparator (the double colon), is a token that allows access to static, constant, and overridden properties or methods of a class.
    c::foo();

?>