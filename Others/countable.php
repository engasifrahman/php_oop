<?php
class MyCollection implements Countable {
    private $items = [];

    public function __construct(array $items) {
        $this->items = $items;
    }

    public function count(): int {
        return count($this->items);
    }
}

// Usage
$collection = new MyCollection(['apple', 'banana', 'cherry']);
echo count($collection); // Outputs: 3

echo PHP_INT_SIZE;
