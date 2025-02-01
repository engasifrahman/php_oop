<?php
    
/**
 * ?IteratorAggregate
 * 
 * Interface to create an external Iterator.
 * 
 * IteratorAggregate interface extends abstract Traversable interface. 
 * It is implemented by a class to create an external iterator. 
 * This interface introduces on abstract method called getIterator.
 * 
 * *Usecase: use when you want to delegate the iteration logic to 
 * another iterator (like ArrayIterator), simplifying the implementation.
 *
 * *Interface synopsis
     interface IteratorAggregate extends Traversable {
    // Methods
    public getIterator(): Traversable
    }
    */
class myIteratorAggregate implements IteratorAggregate {
    public $property1 = "Public property one";
    public $property2 = "Public property two";
    public $property3 = "Public property three";

    public function __construct() {
        $this->property4 = "last property";
    }

    public function getIterator() {
        return new ArrayIterator($this);
    }
}

$obj = new myIteratorAggregate;

foreach($obj as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}
