<?php

/**
 * ?Iterator
 * 
 * Interface for external iterators or objects that can be iterated themselves internally.
 * 
 * Iterator interface extends abstract Traversable interface. 
 * PHP provides many built-in iterators (called SPL iterators) for many routine functionalities. 
 * Examples are ArrayIterator, DirectoryIterator etc. 
 * A user class that implements Iterator interface should implement abstract methods as defined below.
 * 
 * Usecase: use when you need to define a custom iteration logic, especially when iteration involves complex traversal.
 * 
 * *Interface synopsis
  interface Iterator extends Traversable {
    // Methods
    public current(): mixed
    public key(): mixed
    public next(): void
    public rewind(): void
    public valid(): bool
  }
  */
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    // array_values() makes sure that the keys are numbers
    $this->items = array_values($items);
  }

  public function current() {
    return $this->items[$this->pointer];
  }

  public function key() {
    return $this->pointer;
  }

  public function next() {
    $this->pointer++;
  }

  public function rewind() {
    $this->pointer = 0;
  }

  public function valid() {
    // count() indicates how many items are in the list
    return $this->pointer < count($this->items);
  }
}

// A function that uses iterables
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);
