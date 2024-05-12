<?php
    class Foo
    {
        public $name = 'foo';

        public function getName() {
            return $this->name; // Early binding (compile time)
        }
    }

    class Bar extends Foo
    {
        public $name = 'bar';
    }

    $obj = new Foo;
    print $obj->getName() . PHP_EOL;
    print $obj->name . PHP_EOL . PHP_EOL;

	echo "-----------------------------------------------------------" . PHP_EOL;

    $obj = new Bar;
    print $obj->getName() . PHP_EOL;
    print $obj->name . PHP_EOL . PHP_EOL;