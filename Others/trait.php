<?php

//Example #1 Trait example
trait ezcReflectionReturnInfo {
    function getReturnType() { /*1*/ }
    function getReturnDescription() { /*2*/ }
}

class ezcReflectionMethod extends ReflectionMethod {
    use ezcReflectionReturnInfo;
    /* ... */
}

class ezcReflectionFunction extends ReflectionFunction {
    use ezcReflectionReturnInfo;
    /* ... */
}

//Example #2 Precedence Order Example
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}
$o = new MyHelloWorld();
$o->sayHello();

//Example #3 Alternate Precedence Order Example
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
        echo '<br>';
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();

//Example #4 Multiple Traits Usage
trait Hello {
    public function sayHello() {
        echo '<br>';
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

class MyyHelloWorld {
    use Hello, World;
    public function sayExclamationMark() {
        echo '!';
    }
}

// $o = new MyyHelloWorld();
// $o->sayHello();
// $o->sayWorld();
// $o->sayExclamationMark();


MyyHelloWorld::sayHello();
MyyHelloWorld::sayWorld();
MyyHelloWorld::sayExclamationMark();