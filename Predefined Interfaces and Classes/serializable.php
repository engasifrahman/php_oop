<?php
class MySerializableClass implements Serializable {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function serialize(): string {
        // Convert the data to a string representation
        return serialize($this->data);
    }

    public function unserialize($data): void {
        // Restore the data from the string representation
        $this->data = unserialize($data);
    }

    public function getData() {
        return $this->data;
    }
}

// Usage
$obj = new MySerializableClass(['foo', 'bar']);
$serialized = serialize($obj); // Calls $obj->serialize() internally
echo $serialized . "\n";

$unserialized = unserialize($serialized); // Calls $unserialized->unserialize($data) internally
var_dump($unserialized->getData()); // Outputs: array(2) { [0]=> string(3) "foo" [1]=> string(3) "bar" }

