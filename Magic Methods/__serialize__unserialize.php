<?php
class MySerializableClass {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function __serialize(): array {
        // Convert the object's data to an array representation
        return $this->data;
    }

    public function __unserialize(array $data): void {
        // Restore the object's data from the array representation
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }
}

// Usage
$obj = new MySerializableClass(['foo', 'bar']);
$serialized = serialize($obj); // Calls $obj->__serialize() internally
echo $serialized . "\n";

$unserialized = unserialize($serialized); // Calls $unserialized->__unserialize($data) internally
var_dump($unserialized->getData()); // Outputs: array(2) { [0]=> string(3) "foo" [1]=> string(3) "bar" }
