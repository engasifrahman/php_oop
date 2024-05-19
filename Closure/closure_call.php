<?php
class A {
    private $x = 1;
}

// Pre PHP 7 code
$getX = function() {
    return $this->x;
};
$getXCB = $getX->bindTo(new A, 'A'); // intermediate closure
echo $getXCB()."\n";

// PHP 7+ code
$getX = function() {
    return $this->x;
};
echo $getX->call(new A)."\n";

/* -------------------------------------------------------------------------- */
// PHP 7 code
class Value {
    protected $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }
}

$three = new Value(3);
$four = new Value(4);

$closure = function ($delta) { 
    var_dump($this->getValue() + $delta); 
};

$closure = $closure->bindTo($three, 'Value');
$closure(3);
$closure = $closure->bindTo($four, 'Value');
$closure(4);

// PHP 7+ code
$closure->call($three, 4);
$closure->call($four, 4);


/* -------------------------------------------------------------------------- */
class MyClass {
    private static $staticProperty = "Hello from static property";

    public function getStaticPropertyClosure() {
        return function() {
            return self::$staticProperty; // This won't work
        };
    }

    public function getStaticPropertyClosureWithUse() {
        $staticProperty = self::$staticProperty;
        return function() use ($staticProperty) {
            return $staticProperty; // This works
        };
    }
}

$obj = new MyClass();
$closureWithUse = $obj->getStaticPropertyClosureWithUse();
// Call the closure with use to access the static property
$resultWithUse = Closure::call($closureWithUse);
echo $resultWithUse; // This will work
