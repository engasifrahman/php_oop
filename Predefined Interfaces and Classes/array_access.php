<?php

/**
 * ?ArrayAccess
 * 
 * Interface to provide accessing objects as arrays.
 * 
 * Interface synopsis
   interface ArrayAccess {
        // Methods
        public offsetUnset(mixed $offset): void // Unsets the value at the specified offset
        public offsetExists(mixed $offset): bool // Checks if an offset exists
        public offsetGet(mixed $offset): mixed // Retrieves the value at the specified offset.
        public offsetSet(mixed $offset, mixed $value): void // Sets the value at the specified offset
   }
   *
   * ?Array vs ArrayAccess
   * Use Arrays: When you need a simple, straightforward way to store and manipulate multiple values.
   * Use ArrayAccess: When you want to create objects that behave like arrays but with added 
   * control(Encapsulation) and customization over the access and modification of the elements.
 */
class Obj implements ArrayAccess {
    private $container = array();

    public function __construct() {
        $this->container = array(
            "one"   => 1,
            "two"   => 2,
            "three" => 3,
        );
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

$obj = new Obj;

var_dump(isset($obj["two"]));
var_dump($obj["two"]);
unset($obj["two"]);
var_dump(isset($obj["two"]));
$obj["two"] = "A value";
var_dump($obj["two"]);
$obj[] = 'Append 1';
$obj[] = 'Append 2';
$obj[] = 'Append 3';
print_r($obj);